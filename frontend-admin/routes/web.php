<?php

use Illuminate\Support\Facades\Route;

// ========================================================================= //
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\UserController;
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
Route::put('Admin/vw_user/edit_user/editUser/{parameter}', [UserController::class, 'editUser'])
->name('Admin/vw_user/edit_user/editUser/{parameter}');

//route untuk detail profil user
Route::get("Admin/profil_admin", [ProfilController::class, 'viewProfilAdmin'])
->name('Admin/profil_admin');

// ========================================================================= //
// ================================ROUTE KAMAR============================== //
// ========================================================================= //
// Route Untuk View Data Kamar
Route::get("Admin/vw_kamar/tampil_kamar", [KamarController::class, 'viewKamar'])
->name('Admin/vw_kamar/tampil_kamar');

// Route Untuk Hapus Data Kamar
Route::delete("Admin/vw_kamar/tampil_kamar/deleteKamar/{parameter}", [KamarController::class, 'deleteKamar'])
->name('Admin/vw_kamar/tampil_kamar/deleteKamar/{parameter}');

// Route untuk tambah data Kamar
Route::get("Admin/vw_kamar/tambah_kamar", [KamarController::class, 'addKamar'])
->name('Admin/vw_kamar/tambah_kamar');

// Route untuk Save data Kamar
Route::post("Admin/vw_kamar/tambah_kamar/insertKamar", [KamarController::class, 'insertKamar'])
->name('Admin/vw_kamar/tambah_kamar/insertKamar');

//route untuk detail data Kamar
Route::get('Admin/vw_kamar/detail_kamar/detailKamar/{parameter}', [KamarController::class, 'detailKamar'])
->name('Admin/vw_kamar/detail_kamar/detailKamar/{parameter}');

//route untuk update data Kamar
// Route cek data Kamar
Route::get('Admin/vw_kamar/edit_kamar/updateKamar/{parameter}', [KamarController::class, 'updateKamar'])
->name('Admin/vw_kamar/edit_kamar/updateKamar/{parameter}');

// route untuk checkupdate data Kamar
Route::put('Admin/vw_kamar/edit_kamar/editKamar/{parameter}', [KamarController::class, 'editKamar'])
->name('Admin/vw_kamar/edit_kamar/editKamar/{parameter}');


// ========================================================================= //
// ================================ROUTE PESAN============================== //
// ========================================================================= //
// Route Untuk View Data Pesan
Route::get("Admin/vw_pesan/tampil_pesan", [PesanController::class, 'viewPesan'])
->name('Admin/vw_pesan/tampil_pesan');

// Route Untuk Hapus Data Komplain
Route::delete("Admin/vw_pesan/tampil_pesan/deletePesan/{parameter}", [PesanController::class, 'deletePesan'])
->name('Admin/vw_pesan/tampil_pesan/deletePesan/{parameter}');

// Route untuk tambah data Komplain
Route::get("Admin/vw_pesan/tambah_pesan", [PesanController::class, 'addPesan'])
->name('Admin/vw_pesan/tambah_pesan');

// Route untuk Save data komplain
Route::post("Admin/vw_pesan/tambah_pesan/insertPesan", [PesanController::class, 'insertPesan'])
->name('Admin/vw_pesan/tambah_pesan/insertPesan');

//route untuk detail data komplain
Route::get('Admin/vw_pesan/detail_pesan/detailPesan/{parameter}', [PesanController::class, 'detailPesan'])
->name('Admin/vw_pesan/detail_pesan/detailPesan/{parameter}');

//route untuk update data komplain
// Route cek data komplain
Route::get('Admin/vw_pesan/edit_pesan/updatePesan/{parameter}', [PesanController::class, 'updatePesan'])
->name('Admin/vw_pesan/edit_pesan/updatePesan/{parameter}');

// route untuk checkupdate data komplain
Route::put('Admin/vw_pesan/edit_pesan/editPesan/{parameter}', [PesanController::class, 'editPesan'])
->name('Admin/vw_pesan/edit_pesan/editPesan/{parameter}');


// ========================================================================= //
// ================================ROUTE SEWA============================== //
// ========================================================================= //
// Route Untuk View Data Sewa
Route::get("Admin/vw_sewa/tampil_sewa", [SewaController::class, 'viewSewa'])
->name('Admin/vw_sewa/tampil_sewa');

// Route Untuk Hapus Data Sewa
Route::delete("Admin/vw_sewa/tampil_sewa/deleteSewa/{parameter}", [SewaController::class, 'deleteSewa'])
->name('Admin/vw_sewa/tampil_sewa/deleteSewa/{parameter}');

// Route untuk tambah data Sewa
Route::get("Admin/vw_sewa/tambah_sewa", [SewaController::class, 'addSewa'])
->name('Admin/vw_sewa/tambah_sewa');

// Route untuk Save data Sewa
Route::post("Admin/vw_sewa/tambah_sewa/insertSewa", [SewaController::class, 'insertSewa'])
->name('Admin/vw_sewa/tambah_sewa/insertSewa');

//route untuk detail data sewa
Route::get('Admin/vw_sewa/detail_sewa/detailSewa/{parameter}', [SewaController::class, 'detailSewa'])
->name('Admin/vw_sewa/detail_sewa/detailSewa/{parameter}');

//route untuk update data sewa
// Route cek data sewa
Route::get('Admin/vw_sewa/edit_sewa/updateSewa/{parameter}', [SewaController::class, 'updateSewa'])
->name('Admin/vw_sewa/edit_sewa/updateSewa/{parameter}');

// route untuk checkupdate data sewa
Route::put('Admin/vw_sewa/edit_sewa/editSewa/{parameter}', [SewaController::class, 'editSewa'])
->name('Admin/vw_sewa/edit_sewa/editSewa/{parameter}');


// ========================================================================= //
// ================================ROUTE KOMPLAIN============================== //
// ========================================================================= //
// Route Untuk View Data Komplain
Route::get("Admin/vw_komplain/tampil_komplain", [KomplainController::class, 'viewKomplain'])
->name('Admin/vw_komplain/tampil_komplain');

// Route Untuk Hapus Data Komplain
Route::delete("Admin/vw_komplain/tampil_komplain/deleteKomplain/{parameter}", [KomplainController::class, 'deleteKomplain'])
->name('Admin/vw_komplain/tampil_komplain/deleteKomplain/{parameter}');

// Route untuk tambah data Komplain
Route::get("Admin/vw_komplain/tambah_komplain", [KomplainController::class, 'addKomplain'])
->name('Admin/vw_komplain/tambah_komplain');

// Route untuk Save data komplain
Route::post("Admin/vw_komplain/tambah_komplain/insertKomplain", [KomplainController::class, 'insertKomplain'])
->name('Admin/vw_komplain/tambah_komplain/insertKomplain');

//route untuk detail data komplain
Route::get('Admin/vw_komplain/detail_komplain/detailKomplain/{parameter}', [KomplainController::class, 'detailKomplain'])
->name('Admin/vw_komplain/detail_komplain/detailKomplain/{parameter}');

//route untuk update data komplain
// Route cek data komplain
Route::get('Admin/vw_komplain/edit_komplain/updateKomplain/{parameter}', [KomplainController::class, 'updateKomplain'])
->name('Admin/vw_komplain/edit_komplain/updateKomplain/{parameter}');

// route untuk checkupdate data komplain
Route::put('Admin/vw_komplain/edit_komplain/editKomplain/{parameter}', [KomplainController::class, 'editKomplain'])
->name('Admin/vw_komplain/edit_komplain/editKomplain/{parameter}');


