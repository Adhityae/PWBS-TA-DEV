<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomplainModel;

class KomplainController extends Controller
{
    //Function Construct()
    function __construct()
    {
        $this->model = new KomplainModel();
    }

    // Function Untuk View Data
    function viewKomplain()
    {
        // Ambil function viewData dari KomplainModel
        $data = $this->model->viewData();

        // Tampilkan hasil dari "tbl_komplain"
        return response([
            "DataKomplain" => $data
        ], http_response_code());
    }

    // Function untuk view data tbl_komplain join tbl_users join tbl_kamar
    function viewKomplainJoin()
    {
        // ambil function viewDataKomplainJoin dari KomplainModel
        $data = $this->model->viewDataKomplainJoin();

        // Tampilkan hasil dari "tbl_komplain" join "tbl_users" join "tbl_kamar"
        return response([
            "DataKomplainJoin" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data komplain
    function detailKomplain($parameter)
    {
        // Ambil fungsi detailData dari KomplainModel
        $data = $this->model->detailData($parameter);

        // Tampilkan Hasil dari "tbl_komplain"
        return response([
            "DetailKomplain" => $data
        ], http_response_code());
    }

    // function Untuk Delete Data komplain
    function deleteKomplain($parameter)
    {
        // cek data dari tbl_komplain (berdasarkan kode_komplain)
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
            $pesan = "Data Gagal di Hapus ! (Kode Komplain tidak ditemukan !)";
        }
        // Tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Insert Data komplain
    function insertKomplain(Request $req)
    {
        // Ambil data dari hasil input
        $data = array(
            "kode_komplain" => $req->kode_komplain,
            "kode_user" => $req->kode_user,
            "kode_kamar" => $req->kode_kamar,
            "perihal" => $req->perihal,
            "isi" => $req->isi,
            "status" => $req->status,
        );
        //
        $parameter = ($data["kode_komplain"]);
        // Cek apakah data komplain (kode_komplain) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);

        // Jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukakan proses penyimpanan
            $this->model->saveData($data["kode_komplain"], $data["kode_user"], $data["kode_kamar"], $data["perihal"], $data["isi"], $data["status"]);
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

    // Function untuk Update Data komplain
    function updateKomplain($parameter, Request $req)
    {
        // Ambil data hasil input
        $data = array(
            "kode_komplain" => $req->kode_komplain,
            "kode_user" => $req->kode_user,
            "kode_kamar" => $req->kode_kamar,
            "perihal" => $req->perihal,
            "isi" => $req->isi,
            "status" => $req->status,
        );

        // Cek apakah data komplain tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["kode_komplain"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data komplain
            $this->model->updateData(
                $data["kode_komplain"],
                $data["kode_user"],
                $data["kode_kamar"],
                $data["perihal"],
                $data["isi"],
                $data["status"],
                $parameter
            );
            // tampilkan pesan
            $status = "1";
            $pesan = "Data Berhasil di Ubah";
        }
        // Jika data tidak ditemukan
        else {
            $status = 0;
            $pesan = "Data Gagal Diubah ! (Kode_komplain Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
