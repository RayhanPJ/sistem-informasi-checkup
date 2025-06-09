<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage()
    {
        if (session()->has('user')) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid credentials'], 401);
        }

        $request->session()->put('user', $user);

        return response()->json(['status' => 'success', 'message' => 'Login successful']);
    }

    public function logout(Request $request)
    {
        session()->flush();

        return response()->json(['status' => 'success', 'message' => 'Logged out successfully']);
    }
}
