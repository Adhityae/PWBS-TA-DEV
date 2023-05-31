<?php

use Illuminate\Support\Facades\Route;

// ========================================================================= //
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KomplainController;
// ========================================================================= //

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


// ========================================================================= //
// ================================ROUTE DASHBOARD============================== //
// ========================================================================= //
Route::get("/", [HomeController::class, 'viewHomeUser'])->name('dashboard');

// ========================================================================= //
// ================================ROUTE USER============================== //
// ========================================================================= //

// Route Untuk View Data User
Route::get("User/vw_user/tampil_user", [UserController::class, 'viewUser'])
->name('User/vw_user/tampil_user');

// Route Untuk Hapus Data User
Route::delete("User/vw_user/tampil_user/deleteUser/{parameter}", [UserController::class, 'deleteUser'])
->name('User/vw_user/tampil_user/deleteUser/{parameter}');

// Route untuk tambah data User
Route::get("User/vw_user/tambah_user", [UserController::class, 'addUser'])
->name('User/vw_user/tambah_user');

// Route untuk Save data User
Route::post("User/vw_user/tambah_user/insertUser", [UserController::class, 'insertUser'])
->name('User/vw_user/tambah_user/insertUser');

//route untuk detail data user
Route::get('User/vw_user/detail_user/detailUser/{parameter}', [UserController::class, 'detailUser'])
->name('User/vw_user/detail_user/detailUser/{parameter}');

//route untuk update data user
// Route cek data user
Route::get('User/vw_user/edit_user/updateUser/{parameter}', [UserController::class, 'updateUser'])
->name('User/vw_user/edit_user/updateUser/{parameter}');

// route untuk checkupdate data user
Route::put('User/vw_user/edit_user/editData/{parameter}', [UserController::class, 'editData'])
->name('User/vw_user/edit_user/editData/{parameter}');

//route untuk detail profil user
Route::get("User/profil_user", [ProfilController::class, 'viewProfilUser'])
->name('User/profil_user');

// ========================================================================= //
// ================================ROUTE KAMAR============================== //
// ========================================================================= //
// Route Untuk View Data Kamar
Route::get("User/vw_kamar/tampil_kamar", [KamarController::class, 'viewKamar'])
->name('User/vw_kamar/tampil_kamar');

// Route untuk tambah data Kamar
Route::get("User/vw_kamar/tambah_kamar", [KamarController::class, 'insertKamar'])
->name('User/vw_kamar/tambah_kamar');


// ========================================================================= //
// ================================ROUTE PESAN============================== //
// ========================================================================= //
// Route Untuk View Data Pesan
Route::get("User/vw_pesan/tampil_pesan", [PesanController::class, 'viewPesan'])
->name('User/vw_pesan/tampil_pesan');

// Route untuk tambah data Pesan
Route::get("User/vw_pesan/tambah_pesan", [PesanController::class, 'insertPesan'])
->name('User/vw_pesan/tambah_pesan');


// ========================================================================= //
// ================================ROUTE SEWA============================== //
// ========================================================================= //
// Route Untuk View Data Sewa
Route::get("User/vw_sewa/tampil_sewa", [SewaController::class, 'viewSewa'])
->name('User/vw_sewa/tampil_sewa');

// Route untuk tambah data Sewa
Route::get("User/vw_sewa/tambah_sewa", [SewaController::class, 'insertSewa'])
->name('User/vw_sewa/tambah_sewa');


// ========================================================================= //
// ================================ROUTE KOMPLAIN============================== //
// ========================================================================= //
// Route Untuk View Data Komplain
Route::get("User/vw_komplain/tampil_komplain", [KomplainController::class, 'viewKomplain'])
->name('User/vw_komplain/tampil_komplain');

// Route untuk tambah data komplain
Route::get("User/vw_komplain/tambah_komplain", [KomplainController::class, 'insertKomplain'])
->name('User/vw_komplain/tambah_komplain');


