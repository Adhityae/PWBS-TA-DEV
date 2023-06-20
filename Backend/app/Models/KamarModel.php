<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KamarModel extends Model
{
    // Tampil Data Kamar
    function viewData()
    {
        $query = DB::table('tbl_kamar')
            ->select(
                "kode_kamar",
                "nama_kamar",
                "lantai",
                "deskripsi_kamar",
                "status",
                "harga",
                "foto_kamar"
            )
            ->orderBy("kode_kamar")
            ->get();

        return $query;
    }

    // Detail Data Kamar
    function detailData($parameter)
    {
        $query = DB::table('tbl_kamar')
            ->select(
                "kode_kamar",
                "nama_kamar",
                "lantai",
                "deskripsi_kamar",
                "status",
                "harga",
                "foto_kamar"
            )
            ->where(DB::raw("(kode_kamar)"), "=", $parameter)
            ->orderBy("kode_kamar")
            ->get();

        return $query;
    }

    // Delete Data Kamar
    function deleteData($parameter)
    {
        DB::table("tbl_kamar")
            ->where(DB::raw("(kode_kamar)"), "=", $parameter)
            ->delete();
    }

    // Insert Data Kamar
    function saveData($kode_kamar, $nama_kamar, $lantai, $deskripsi_kamar, $status, $harga, $foto_kamar)
    {
        DB::table("tbl_kamar")
            ->insert([
                "kode_kamar" => $kode_kamar,
                "nama_kamar" => $nama_kamar,
                "lantai" => $lantai,
                "deskripsi_kamar" => $deskripsi_kamar,
                "status" => $status,
                "harga" => $harga,
                "foto_kamar" => $foto_kamar
            ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function checkUpdate($kode_kamar_lama, $kode_kamar_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_kamar")
            ->select("kode_kamar")
            ->where("kode_kamar", "=", $kode_kamar_baru)
            ->where(DB::raw("(kode_kamar)"), "!=", $kode_kamar_lama)
            ->get();

        return $query;
    }

    // Update Data Kamar
    function updateData(
        $kode_kamar,
        $nama_kamar,
        $lantai,
        $deskripsi_kamar,
        $status,
        $harga,
        $foto_kamar,
        $kode_kamar_lama
    ) {
        DB::table("tbl_kamar")
            ->where(DB::raw("(kode_kamar)"), "=", $kode_kamar_lama)
            ->update([
                "kode_kamar" => $kode_kamar,
                "nama_kamar" => $nama_kamar,
                "lantai" => $lantai,
                "deskripsi_kamar" => $deskripsi_kamar,
                "status" => $status,
                "harga" => $harga,
                "foto_kamar" => $foto_kamar
            ]);
    }
}
