<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KursusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('/user', [UserController::class, 'create'])->name('user');
Route::post('user/register', [UserController::class, 'store']) -> name('user-register');
Route::get('/login', [UserController::class, 'pageLogin'])->name('user-pageLogin');
Route::post('/login', [UserController::class, 'login'])->name('user-login');
Route::get('/main',[UserController::class, 'main'])->name('main');

// Admin
Route::get('/admin/login', [AdminController::class, 'pageLogin'])->name('admin-login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin-login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin-logout');

// Kursus
Route::get('/create',[KursusController::class, 'create'])->name('kursus-create');
Route::post('/create',[KursusController::class, 'store'])->name('kursus-store');
Route::get('/edit/{id}',[KursusController::class, 'edit'])->name('kursus-edit');
Route::put('/edit/{id}', [KursusController::class, 'update'])->name('kursus-update');
Route::delete('/delete/{id}', [KursusController::class, 'destroy'])->name('kursus-destroy');

// Data Student
Route::get('/student', [UserController::class, 'index'])-> name('user-index');