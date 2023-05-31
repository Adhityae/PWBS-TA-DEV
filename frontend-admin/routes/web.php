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
Route::get("/", [HomeController::class, 'viewHomeAdmin'])->name('dashboard');

// ========================================================================= //
// ================================ROUTE USER============================== //
// ========================================================================= //

// Route Untuk View Data User
Route::get("Admin/vw_user/tampil_user", [UserController::class, 'viewUser'])
->name('Admin/vw_user/tampil_user');

// Route Untuk Hapus Data User
Route::delete("Admin/vw_user/tampil_user/deleteUser/{parameter}", [UserController::class, 'deleteUser'])
->name('Admin/vw_user/tampil_user/deleteUser/{parameter}');

// Route untuk tambah data User
Route::get("Admin/vw_user/tambah_user", [UserController::class, 'addUser'])
->name('Admin/vw_user/tambah_user');

// Route untuk Save data User
Route::post("Admin/vw_user/tambah_user/insertUser", [UserController::class, 'insertUser'])
->name('Admin/vw_user/tambah_user/insertUser');

//route untuk detail data user
Route::get('Admin/vw_user/detail_user/detailUser/{parameter}', [UserController::class, 'detailUser'])
->name('Admin/vw_user/detail_user/detailUser/{parameter}');

//route untuk update data user
// Route cek data user
Route::get('Admin/vw_user/edit_user/updateUser/{parameter}', [UserController::class, 'updateUser'])
->name('Admin/vw_user/edit_user/updateUser/{parameter}');

// route untuk checkupdate data user
Route::put('Admin/vw_user/edit_user/editData/{parameter}', [UserController::class, 'editData'])
->name('Admin/vw_user/edit_user/editData/{parameter}');

//route untuk detail profil user
Route::get("Admin/profil_admin", [ProfilController::class, 'viewProfilAdmin'])
->name('Admin/profil_admin');

// ========================================================================= //
// ================================ROUTE KAMAR============================== //
// ========================================================================= //
// Route Untuk View Data Kamar
Route::get("Admin/vw_kamar/tampil_kamar", [KamarController::class, 'viewKamar'])
->name('Admin/vw_kamar/tampil_kamar');

// Route untuk tambah data Kamar
Route::get("Admin/vw_kamar/tambah_kamar", [KamarController::class, 'insertKamar'])
->name('Admin/vw_kamar/tambah_kamar');


// ========================================================================= //
// ================================ROUTE PESAN============================== //
// ========================================================================= //
// Route Untuk View Data Pesan
Route::get("Admin/vw_pesan/tampil_pesan", [PesanController::class, 'viewPesan'])
->name('Admin/vw_pesan/tampil_pesan');

// Route untuk tambah data Pesan
Route::get("Admin/vw_pesan/tambah_pesan", [PesanController::class, 'insertPesan'])
->name('Admin/vw_pesan/tambah_pesan');


// ========================================================================= //
// ================================ROUTE SEWA============================== //
// ========================================================================= //
// Route Untuk View Data Sewa
Route::get("Admin/vw_sewa/tampil_sewa", [SewaController::class, 'viewSewa'])
->name('Admin/vw_sewa/tampil_sewa');

// Route untuk tambah data Sewa
Route::get("Admin/vw_sewa/tambah_sewa", [SewaController::class, 'insertSewa'])
->name('Admin/vw_sewa/tambah_sewa');


// ========================================================================= //
// ================================ROUTE KOMPLAIN============================== //
// ========================================================================= //
// Route Untuk View Data Komplain
Route::get("Admin/vw_komplain/tampil_komplain", [KomplainController::class, 'viewKomplain'])
->name('Admin/vw_komplain/tampil_komplain');

// Route untuk tambah data komplain
Route::get("Admin/vw_komplain/tambah_komplain", [KomplainController::class, 'insertKomplain'])
->name('Admin/vw_komplain/tambah_komplain');


