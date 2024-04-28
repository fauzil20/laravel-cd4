<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\User\UserProfile;

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
    return view('welcome');
});

Auth::routes();

// Route::middleware(['auth','ceklevel:admin'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('/admin/profile', [Controller::class, 'adminProfile'])->name('admin.profile');
// });

Route::middleware(['auth','ceklevel:admin,user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/profile', [Controller::class, 'profile'])->name('user.profile');
    Route::get('/admin/karyawan', [Controller::class, 'adminKaryawan'])->name('admin.karyawan');
    Route::get('/admin/tambahkaryawan', [Controller::class, 'adminTambahKaryawan'])->name('admin.tambah.karyawan');
    Route::post('/insertdata',[Controller::class,'insertdata'])->name('insertdata');

});
