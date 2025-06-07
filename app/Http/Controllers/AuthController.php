<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function registPage()
    {
        return view('auth.regist');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'approved' => false, // user perlu approval dulu
        ]);

        return response()->json(['message' => 'Registration successful, waiting for admin approval.'], 201);
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        if (!$user->approved) {
            return response()->json(['message' => 'Your account is not approved yet.'], 403);
        }

        // simpan data user di session
        $request->session()->put('user', $user);

        return response()->json(['message' => 'Login successful']);
    }

    public function logout(Request $request)
    {
        // flush semua session data
        $request->session()->flush();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
