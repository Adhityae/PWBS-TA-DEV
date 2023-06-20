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
Route::get("/", [HomeController::class, 'viewHomeUser'])->name('dashboard_user');

Route::get("User/hubungi_kami", [HomeController::class, 'viewHubungiKami'])
->name('User/hubungi_kami');

Route::get("User/cek_tagihan", [HomeController::class, 'viewCekTagihan'])
->name('User/cek_tagihan');

Route::get("User/detail_kamar", [HomeController::class, 'viewDetailKamar'])
->name('User/detail_kamar');

Route::get("User/tampil_datakamar", [KamarController::class, 'viewTampilKamar'])
->name('User/tampil_datakamar');

//route untuk detail data kamar
Route::get('User/detail_kamar/detailKamar/{parameter}', [HomeController::class, 'detailKamar'])
->name('User/detail_kamar/detailKamar/{parameter}');

//route untuk detail data kamar
Route::get('User/detail_kamar/detailKamar/{parameter}', [KamarController::class, 'detailKamar'])
->name('User/detail_kamar/detailKamar/{parameter}');

// ========================================================================= //
// ================================ROUTE USER============================== //
// ========================================================================= //

Route::get("User/tambah_datauser", [UserController::class, 'addUser'])
->name('User/tambah_datauser');

// Route untuk Save data User
Route::post("User/tambah_datauser/insertUser", [UserController::class, 'insertUser'])
->name('User/tambah_datauser/insertUser');


// ========================================================================= //
// ================================ROUTE PESAN============================== //
// ========================================================================= //

Route::get("User/tambah_datapesan", [PesanController::class, 'addPesan'])
->name('User/tambah_datapesan');

// Route untuk Save data Pesan
Route::post("User/tambah_datapesan/insertPesan", [PesanController::class, 'insertPesan'])
->name('User/tambah_datapesan/insertPesan');
