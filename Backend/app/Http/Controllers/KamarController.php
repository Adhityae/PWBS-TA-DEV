<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarModel;

class KamarController extends Controller
{
    //Function Construct()
    function __construct()
    {
        $this->model = new KamarModel();
    }

    // Function Untuk View Data
    function viewKamar()
    {
        // Ambil function viewData dari UserModel
        $data = $this->model->viewData();

        // Tampilkan hasil dari "tbl_user"
        return response([
            "DataKamar" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data User
    function detailKamar($parameter)
    {
        // Ambil fungsi detailData dari UserModel
        $data = $this->model->detailData($parameter);

        // Tampilkan Hasil dari "tbl_user"
        return response([
            "DetailKamar" => $data
        ], http_response_code());
    }

    // function Untuk Delete Data User
    function deleteKamar($parameter)
    {
        // cek data dari tbl_user (berdasarkan kode_kamar)
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
            $pesan = "Data Gagal di Hapus ! (Kode_Kamar tidak ditemukan !)";
        }
        // Tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Insert Data User
    function insertKamar(Request $req)
    {
        // Ambil data dari hasil input
        $data = array(
            "kode_kamar" => $req->kode_kamar,
            "nama_kamar" => $req->nama_kamar,
            "lantai" => $req->lantai,
            "deskripsi_kamar" => $req->deskripsi_kamar,
            "status" => $req->status,
            "harga" => $req->harga,
            "foto_kamar" => $req->foto_kamar,
        );
        //
        $parameter = ($data["kode_kamar"]);
        // Cek apakah data user (kode_kamar) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);

        // Jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukakan proses penyimpanan
            $this->model->saveData($data["kode_kamar"], $data["nama_kamar"], $data["lantai"], $data["deskripsi_kamar"], $data["status"], $data["harga"], $data["foto_kamar"]);
            // buat pesan dan status hasil penyimpanan data
            $status = 1;
            $pesan = "Data Berhasil Disimpan";
        }
        // jika data tidak ditemukan
        else {
            // tampilkan pesan data gagal disimpan
            $status = 0;
            $pesan = "Data gagal disimpan - Kode_Kamar Sudah Tersimpan !...";
        }
        // Tampilkan hasil response
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Update Data Kamar
    function updateKamar(
        $parameter,
        Request $req
    ) {
        // Ambil data hasil input
        $data = array(
            "kode_kamar" => $req->kode_kamar,
            "nama_kamar" => $req->nama_kamar,
            "lantai" => $req->lantai,
            "deskripsi_kamar" => $req->deskripsi_kamar,
            "status" => $req->status,
            "harga" => $req->harga,
            "foto_kamar" => $req->foto_kamar
        );

        // Cek apakah data kamar tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["kode_kamar"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data kamar
            $this->model->updateData(
                $data["kode_kamar"],
                $data["nama_kamar"],
                $data["lantai"],
                $data["deskripsi_kamar"],
                $data["status"],
                $data["harga"],
                $data["foto_kamar"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Kode_Kamar Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
