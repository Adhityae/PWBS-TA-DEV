<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ========================================================================= //
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KomplainController;
// ========================================================================= //

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// ========================================================================= //
// ================================ROUTE REGISTER=============================== //
// ========================================================================= //
// Api Route Register User
Route::post('/register', [RegisterController::class, 'register']);

// Api Route Login User
Route::get('/login', [RegisterController::class, 'login']);

// Api Route Logout User
Route::post('/logout', [RegisterController::class, 'logout']);

// ========================================================================= //
// ================================ROUTE USER=============================== //
// ========================================================================= //
// Route untuk tampil data user
Route::get('/viewUser', [UserController::class, 'viewUser']);
//route untuk detail data user
Route::get('/detailUser/{parameter}', [UserController::class, 'detailUser']);
//route untuk hapus data user
Route::delete('/deleteUser/{parameter}', [UserController::class, 'deleteUser']);
// Route untuk insert data user
Route::post('/insertUser', [UserController::class, 'insertUser']);
// Route untuk update data user
Route::put('/updateUser/{parameter}', [UserController::class, 'updateUser']);

// ========================================================================= //
// ================================ROUTE KAMAR============================== //
// ========================================================================= //

Route::get('/viewKamar', [KamarController::class, 'viewKamar']);
//route untuk detail data kamar
Route::get('/detailKamar/{parameter}', [KamarController::class, 'detailKamar']);
//route untuk hapus data kamar
Route::delete('/deleteKamar/{parameter}', [KamarController::class, 'deleteKamar']);
// Route untuk insert data kamar
Route::post('/insertKamar', [KamarController::class, 'insertKamar']);
// Route untuk update data kamar
Route::put('/updateKamar/{parameter}', [KamarController::class, 'updateKamar']);

// ========================================================================= //
// ================================ROUTE PESAN============================== //
// ========================================================================= //

Route::get('/viewPesan', [PesanController::class, 'viewPesan']);
//route untuk tampil data pesan join tbl_users join tbl_kamar
Route::get('/viewPesanJoin', [PesanController::class, 'viewPesanJoin']);
//route untuk detail data pesan
Route::get('/detailPesan/{parameter}', [PesanController::class, 'detailPesan']);
//route untuk hapus data pesan
Route::delete('/deletePesan/{parameter}', [PesanController::class, 'deletePesan']);
// Route untuk insert data pesan
Route::post('/insertPesan', [PesanController::class, 'insertPesan']);
// Route untuk update data pesan
Route::put('/updatePesan/{parameter}', [PesanController::class, 'updatePesan']);

// ========================================================================= //
// ================================ROUTE SEWA============================== //
// ========================================================================= //

Route::get('/viewSewa', [SewaController::class, 'viewSewa']);
//route untuk tampil data sewa join tbl_users join tbl_kamar join tbl_pesan
Route::get('/viewSewaJoin', [SewaController::class, 'viewSewaJoin']);
//route untuk tampil detail data sewa join tbl_users join tbl_kamar join tbl_pesan
Route::get('/viewDetailSewaJoin', [SewaController::class, 'viewDetailSewaJoin']);
//route untuk detailPesan data sewa
Route::get('/detailSewa/{parameter}', [SewaController::class, 'detailSewa']);
//route untuk detailSewaJoin data sewa
Route::get('/detailSewaJoin/{parameter}', [SewaController::class, 'detailSewaJoin']);
//route untuk hapus data sewa
Route::delete('/deleteSewa/{parameter}', [SewaController::class, 'deleteSewa']);
// Route untuk insert data sewa
Route::post('/insertSewa', [SewaController::class, 'insertSewa']);
// Route untuk update data sewa
Route::put('/updateSewa/{parameter}', [SewaController::class, 'updateSewa']);

// ========================================================================= //
// ================================ROUTE KOMPLAIN============================== //
// ========================================================================= //

Route::get('/viewKomplain', [KomplainController::class, 'viewKomplain']);
//route untuk tampil data komplain join tbl_users join tbl_kamar
Route::get('/viewKomplainJoin', [KomplainController::class, 'viewKomplainJoin']);
//route untuk detail data profil
Route::get('/detailKomplain/{parameter}', [KomplainController::class, 'detailKomplain']);
//route untuk hapus data profil
Route::delete('/deleteKomplain/{parameter}', [KomplainController::class, 'deleteKomplain']);
// Route untuk insert data profil
Route::post('/insertKomplain', [KomplainController::class, 'insertKomplain']);
// Route untuk update data profil
Route::put('/updateKomplain/{parameter}', [KomplainController::class, 'updateKomplain']);

// ========================================================================= //
