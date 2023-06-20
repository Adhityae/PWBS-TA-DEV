<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaModel;

class SewaController extends Controller
{
    //Function Construct()
    function __construct()
    {
        $this->model = new SewaModel();
    }

    // Function Untuk View Data
    function viewSewa()
    {
        // Ambil function viewData dari SewaModel
        $data = $this->model->viewData();

        // Tampilkan hasil dari "tbl_sewa"
        return response([
            "DataSewa" => $data
        ], http_response_code());
    }

    // Function untuk view data tbl_pesan join tbl_users join tbl_kamar join tbl_pesan
    function viewSewaJoin()
    {
        // ambil function viewDataSewaJoin dari SewaModel
        $data = $this->model->viewDataSewaJoin();

        // Tampilkan hasil dari "tbl_sewa" join "tbl_users" join "tbl_kamar" join "tbl_pesan"
        return response([
            "Data Sewa Join" => $data
        ], http_response_code());
    }

    // Function untuk view detail data tbl_pesan join tbl_users join tbl_kamar join tbl_pesan
    function viewDetailSewaJoin()
    {
        // ambil function viewDataSewaJoin dari SewaModel
        $data = $this->model->viewDetailDataSewaJoin();

        // Tampilkan hasil dari "tbl_sewa" join "tbl_users" join "tbl_kamar" join "tbl_pesan"
        return response([
            "Detail Tampil Data Sewa Join" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data sewa
    function detailSewa($parameter)
    {
        // Ambil fungsi detailData dari SewaModel
        $data = $this->model->detailData($parameter);

        // Tampilkan Hasil dari "tbl_sewa"
        return response([
            "DetailSewa" => $data
        ], http_response_code());
    }

    // Function Untuk Detail Data sewa
    function detailSewaJoin($parameter)
    {
        // Ambil fungsi detailData dari SewaModel
        $data = $this->model->detailDataJoin($parameter);

        // Tampilkan Hasil dari "tbl_sewa"
        return response([
            "Detail Data Sewa" => $data
        ], http_response_code());
    }

    // function Untuk Delete Data sewa
    function deleteSewa($parameter)
    {
        // cek data dari tbl_sewa (berdasarkan kode_sewa)
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
            $pesan = "Data Gagal di Hapus ! (Kode Sewa tidak ditemukan !)";
        }
        // Tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // Function untuk Insert Data sewa
    function insertSewa(Request $req)
    {
        // Ambil data dari hasil input
        $data = array(
            "kode_sewa" => $req->kode_sewa,
            "kode_pesan" => $req->kode_pesan,
            "kode_user" => $req->kode_user,
            "kode_kamar" => $req->kode_kamar,
            "tanggal_keluar" => $req->tanggal_keluar,
            "pembayaran" => $req->pembayaran,
            "status" => $req->status,
        );
        //
        $parameter =($data["kode_sewa"]);
        // Cek apakah data sewa (kode_sewa) sudah pernah tersimpan/belum
        $check = $this->model->detailData($parameter);

        // Jika data tidak ditemukan
        if (count($check) == 0) {
            // lakukakan proses penyimpanan
            $this->model->saveData($data["kode_sewa"], $data["kode_pesan"], $data["kode_user"], $data["kode_kamar"], $data["tanggal_keluar"], $data["pembayaran"], $data["status"]);
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

    // Function untuk Update Data sewa
    function updateSewa($parameter,Request $req) {
        // Ambil data hasil input
        $data = array(
            "kode_sewa" => $req->kode_sewa,
            "kode_pesan" => $req->kode_pesan,
            "kode_user" => $req->kode_user,
            "kode_kamar" => $req->kode_kamar,
            "tanggal_keluar" => $req->tanggal_keluar,
            "pembayaran" => $req->pembayaran,
            "status" => $req->status,
        );

        // Cek apakah data sewa tersedia/tidak
        $cek = $this->model->checkUpdate($parameter, $data["kode_sewa"]);
        // Jika data tidak ditemukan
        if (count($cek) == 0) {
            // Ubah data sewa
            $this->model->updateData(
                $data["kode_sewa"],
                $data["kode_pesan"],
                $data["kode_user"],
                $data["kode_kamar"],
                $data["tanggal_keluar"],
                $data["pembayaran"],
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
            $pesan = "Data Gagal Diubah ! (Kode_sewa Sudah Pernah Tersimpan)";
        }
        // Tampilkan pesan
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
