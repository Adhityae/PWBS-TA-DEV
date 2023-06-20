<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesanModel extends Model
{
    // Tampil Data pesan
    function viewData()
    {
        $query = DB::table('tbl_pesan')
            ->select(
                "kode_pesan",
                "kode_kamar",
                "kode_user",
                "tanggal_masuk",
                "lama_tinggal"
            )
            ->orderBy("kode_pesan")
            ->get();

        return $query;
    }

    // Tampil Data tbl_pesan Join tbl_users Join tbl_kamar
    function viewDataPesanJoin()
    {
        $query = DB::table('tbl_pesan')
        ->join('users', 'users.kode_user', '=', 'tbl_pesan.kode_user')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_pesan.kode_kamar')
        ->select('tbl_pesan.kode_pesan','tbl_pesan.kode_kamar','tbl_kamar.nama_kamar',
        'tbl_pesan.kode_user','users.nama','tbl_pesan.tanggal_masuk','tbl_pesan.lama_tinggal')
        ->get();

        return $query;
    }

    // Detail Data pesan
    function detailData($parameter)
    {
        $query = DB::table('tbl_pesan')
            ->select(
                "kode_pesan",
                "kode_kamar",
                "kode_user",
                "tanggal_masuk",
                "lama_tinggal"
            )
            ->where(DB::raw("(kode_pesan)"), "=", $parameter)
            ->orderBy("kode_pesan")
            ->get();

        return $query;
    }

    // Delete Data pesan
    function deleteData($parameter)
    {
        DB::table("tbl_pesan")
            ->where(DB::raw("(kode_pesan)"), "=", $parameter)
            ->delete();
    }

    // Insert Data pesan
    function saveData($kode_pesan, $kode_kamar, $kode_user, $tanggal_masuk, $lama_tinggal)
    {
        DB::table("tbl_pesan")
            ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_pesan.kode_kamar')
            ->join('users', 'users.kode_user', '=', 'tbl_pesan.kode_user')
            ->insert([
                "kode_pesan" => $kode_pesan,
                "kode_kamar" => $kode_kamar,
                "kode_user" => $kode_user,
                "tanggal_masuk" => $tanggal_masuk,
                "lama_tinggal" => $lama_tinggal,
            ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function checkUpdate($kode_pesan_lama, $kode_pesan_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_pesan")
            ->select("kode_pesan")
            ->where("kode_pesan", "=", $kode_pesan_baru)
            ->where(DB::raw("(kode_pesan)"), "!=", $kode_pesan_lama)
            ->get();

        return $query;
    }

    // Update Data pesan
    function updateData(
        $kode_pesan,
        $kode_kamar,
        $kode_user,
        $tanggal_masuk,
        $lama_tinggal,
        $kode_pesan_lama
    ) {
        DB::table("tbl_pesan")
            ->where(DB::raw("(kode_pesan)"), "=", $kode_pesan_lama)
            ->update([
                "kode_pesan" => $kode_pesan,
                "kode_kamar" => $kode_kamar,
                "kode_user" => $kode_user,
                "tanggal_masuk" => $tanggal_masuk,
                "lama_tinggal" => $lama_tinggal
            ]);
    }
}
