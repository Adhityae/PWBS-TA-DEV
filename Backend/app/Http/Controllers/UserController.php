<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    // Function Construct()
    function __construct()
    {
        $this->model = new UserModel();
    }

    // Function Untuk View Data User
    function viewUser()
    {
        // Ambil function viewData dari UserModel
        $data = $this->model->viewData();

        // Tampilkan hasil dari "tbl_user"
        return response([
            "DataUser" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data User
    function detailUser($parameter)
    {
        // Ambil fungsi detailData dari UserModel
        $data = $this->model->detailData($parameter);

        // Tampilkan Hasil dari "tbl_user"
        return response([
            "DetailUser" => $data
        ], http_response_code());
    }

    // function Untuk Delete Data User
    function deleteUser($parameter)
    {
        // cek data dari tbl_user (berdasarkan Kode_User)
        $data = $this->model->detailData($parameter);

        // Jika data ditemukan
        if (count($data) != 0) {
            // Lakukan penghapusan data
            $data = $this->model->deleteData($parameter);
            // Buat pesan dan status Hasil Penghapusan Data
            $status = 1;
            $pesan = "Data Berhasil diHapus";
        }
        // Jika data tidak ditemukan
        else {
            // Tampilkan pesan data gagal dihapus
            $status = 1;
            $pesan = "Data Gagal di Hapus ! (Kode User tidak ditemukan !)";
        }
        // Tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Insert Data User
    function insertUser(Request $req)
    {
        // Ambil data dari hasil input
        $data = array(
            "kode_user" => $req->kode_user,
            "nama" => $req->nama,
            "email" => $req->email,
            "password" => $req->password,
            "jk" => $req->jk,
            "alamat" => $req->alamat,
            "no_telepon" => $req->no_telepon,
            "status_user" => $req->status_user,
            "foto_user" => $req->foto_user,
            "role" => $req->role,
        );
        //
        $parameter = ($data["kode_user"]);
        // Cek apakah data user (kode_user) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);

        // Jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukakan proses penyimpanan
            $this->model->saveData($data["kode_user"], $data["nama"], $data["email"], $data["password"], $data["jk"], $data["alamat"], $data["no_telepon"], $data["status_user"], $data["foto_user"], $data["role"]);
            // buat pesan dan status hasil penyimpanan data
            $status = 1;
            $pesan = "Data Berhasil Disimpan";
        }
        // jika data tidak ditemukan
        else {
            // tampilkan pesan data gagal disimpan
            $status = 0;
            $pesan = "Data gagal disimpan";
        }
        // Tampilkan hasil response
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Update Data User
    function updateUser($parameter, Request $req)
    {
        // Ambil data hasil input
        $data = array(
            "kode_user" => $req->kode_user,
            "nama" => $req->nama,
            "email" => $req->email,
            "password" => $req->password,
            "jk" => $req->jk,
            "alamat" => $req->alamat,
            "no_telepon" => $req->no_telepon,
            "status_user" => $req->status_user,
            "foto_user" => $req->foto_user,
            "role" => $req->role,

        );

        // Cek apakah data user tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["kode_user"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data user
            $this->model->updateData(
                $data["kode_user"],
                $data["nama"],
                $data["email"],
                $data["password"],
                $data["jk"],
                $data["alamat"],
                $data["no_telepon"],
                $data["status_user"],
                $data["foto_user"],
                $data["role"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Kode_User Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
