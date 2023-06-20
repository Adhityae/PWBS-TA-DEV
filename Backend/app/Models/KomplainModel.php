<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KomplainModel extends Model
{
    // Tampil Data komplain
    function viewData()
    {
        $query = DB::table('tbl_komplain')
            ->select(
                "kode_komplain",
                "kode_user",
                "kode_kamar",
                "perihal",
                "isi",
                "status"
            )
            ->orderBy("kode_komplain")
            ->get();

        return $query;
    }

    // Tampil Data tbl_komplain Join tb_users join tbl_kamar
    function viewDataKomplainJoin()
    {
        $query = DB::table('tbl_komplain')
        ->join('users', 'users.kode_user', '=', 'tbl_komplain.kode_user')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_komplain.kode_kamar')
        ->select('tbl_komplain.kode_komplain','tbl_komplain.kode_user','users.nama',
        'tbl_komplain.kode_kamar','tbl_kamar.nama_kamar','tbl_komplain.perihal',
        'tbl_komplain.isi','tbl_komplain.status')
        ->get();

        return $query;
    }

    // Detail Data komplain
    function detailData($parameter)
    {
        $query = DB::table('tbl_komplain')
            ->select(
                "kode_komplain",
                "kode_user",
                "kode_kamar",
                "perihal",
                "isi",
                "status"
            )
            ->where(DB::raw("(kode_komplain)"), "=", $parameter)
            ->orderBy("kode_komplain")
            ->get();

        return $query;
    }

    // Delete Data komplain
    function deleteData($parameter)
    {
        DB::table("tbl_komplain")
            ->where(DB::raw("(kode_komplain)"), "=", $parameter)
            ->delete();
    }

    // Insert Data komplain
    function saveData($kode_komplain, $kode_user, $kode_kamar, $perihal, $isi, $status)
    {
        DB::table("tbl_komplain")
        ->join('users', 'users.kode_user', '=', 'tbl_komplain.kode_user')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_komplain.kode_kamar')
            ->insert([
                "kode_komplain" => $kode_komplain,
                "kode_user" => $kode_user,
                "kode_kamar" => $kode_kamar,
                "perihal" => $perihal,
                "isi" => $isi,
                "status" => $status,
            ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function checkUpdate($kode_komplain_lama, $kode_komplain_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_komplain")
            ->select("kode_komplain")
            ->join('users', 'users.kode_user', '=', 'tbl_komplain.kode_user')
            ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_komplain.kode_kamar')
            ->where("kode_komplain", "=", $kode_komplain_baru)
            ->where(DB::raw("(kode_komplain)"), "!=", $kode_komplain_lama)
            ->get();

        return $query;
    }

    // Update Data komplain
    function updateData(
        $kode_komplain,
        $kode_user,
        $kode_kamar,
        $perihal,
        $isi,
        $status,
        $kode_komplain_lama
    ) {
        DB::table("tbl_komplain")
            ->join('users', 'users.kode_user', '=', 'tbl_komplain.kode_user')
            ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_komplain.kode_kamar')
            ->where(DB::raw("(kode_komplain)"), "=", $kode_komplain_lama)
            ->update([
                "kode_komplain" => $kode_komplain,
                "kode_user" => $kode_user,
                "kode_kamar" => $kode_kamar,
                "perihal" => $perihal,
                "isi" => $isi,
                "status" => $status
            ]);
    }
}
