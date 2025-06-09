<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Api\McuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.cek_hasil_mcu');
})->name('home');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/export', [DashboardController::class, 'exportExcel'])->name('export');
Route::post('/import', [DashboardController::class, 'importExcel'])->name('import');
Route::get('/filter', [DashboardController::class, 'filter'])->name('filter');
Route::get('/register', [AuthController::class, 'registPage'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('mcu')->group(function () {
    Route::get('/', [McuController::class, 'index'])->name('mcu.index');
    Route::get('/{id}', [McuController::class, 'show'])->name('mcu.show');
    Route::post('/', [McuController::class, 'store'])->name('mcu.store');
    Route::put('/{id}', [McuController::class, 'update'])->name('mcu.update');
    Route::delete('/{id}', [McuController::class, 'destroy'])->name('mcu.destroy');
});
