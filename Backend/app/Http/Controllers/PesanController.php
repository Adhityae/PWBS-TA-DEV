<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanModel;

class PesanController extends Controller
{
    //Function Construct()
    function __construct()
    {
        $this->model = new PesanModel();
    }

    // Function Untuk View Data
    function viewPesan()
    {
        // Ambil function viewData dari PesanModel
        $data = $this->model->viewData();

        // Tampilkan hasil dari "tbl_pesan"
        return response([
            "DataPesan" => $data
        ], http_response_code());
    }

    // Function untuk view data tbl_pesan join tbl_users join tbl_kamar
    function viewPesanJoin()
    {
        // ambil function viewDataPesanJoin dari PesanModel
        $data = $this->model->viewDataPesanJoin();

        // Tampilkan hasil dari "tbl_pesan" join "tbl_users" join "tbl_kamar"
        return response([
            "Data Pesan Join" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data pesan
    function detailPesan($parameter)
    {
        // Ambil fungsi detailData dari PesanModel
        $data = $this->model->detailData($parameter);

        // Tampilkan Hasil dari "tbl_pesan"
        return response([
            "DetailPesan" => $data
        ], http_response_code());
    }

    // function Untuk Delete Data pesan
    function deletePesan($parameter)
    {
        // cek data dari tbl_pesan (berdasarkan kode_pesan)
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
            $pesan = "Data Gagal di Hapus ! (Kode Pesan tidak ditemukan !)";
        }
        // Tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Insert Data pesan
    function insertPesan(Request $req)
    {
        // Ambil data dari hasil input
        $data = array(
            "kode_pesan" => $req->kode_pesan,
            "kode_kamar" => $req->kode_kamar,
            "kode_user" => $req->kode_user,
            "tanggal_masuk" => $req->tanggal_masuk,
            "lama_tinggal" => $req->lama_tinggal,
        );
        //
        $parameter = base64_encode($data["kode_pesan"]);
        // Cek apakah data pesan (kode_pesan) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);

        // Jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukakan proses penyimpanan
            $this->model->saveData($data["kode_pesan"], $data["kode_kamar"], $data["kode_user"], $data["tanggal_masuk"], $data["lama_tinggal"]);
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

    // Function untuk Update Data pesan
    function updatePesan($parameter, Request $req)
    {
        // Ambil data hasil input
        $data = array(
            "kode_pesan" => $req->kode_pesan,
            "kode_kamar" => $req->kode_kamar,
            "kode_user" => $req->kode_user,
            "tanggal_masuk" => $req->tanggal_masuk,
            "lama_tinggal" => $req->lama_tinggal,
        );

        // Cek apakah data pesan tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["kode_pesan"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data pesan
            $this->model->updateData(
                $data["kode_pesan"],
                $data["kode_kamar"],
                $data["kode_user"],
                $data["tanggal_masuk"],
                $data["lama_tinggal"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Kode_pesan Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
