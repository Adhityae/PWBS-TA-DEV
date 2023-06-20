<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SewaModel extends Model
{
    // Tampil Data sewa
    function viewData()
    {
        $query = DB::table('tbl_sewa')
            ->select(
                "kode_sewa",
                "kode_pesan",
                "kode_user",
                "kode_kamar",
                "tanggal_keluar",
                "pembayaran",
                "status"
            )
            ->orderBy("kode_sewa")
            ->get();

        return $query;
    }

    // Tampil Data tbl_sewa Join tb_users join tbl_kamar join tbl_pesan
    function viewDataSewaJoin()
    {
        $query = DB::table('tbl_sewa')
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
        ->select('tbl_sewa.kode_sewa','tbl_sewa.kode_pesan','tbl_sewa.kode_user',
        'users.nama','tbl_sewa.kode_kamar','tbl_kamar.nama_kamar','tbl_kamar.harga',
        'tbl_pesan.tanggal_masuk','tbl_pesan.lama_tinggal','tbl_sewa.tanggal_keluar',
        'tbl_sewa.pembayaran','tbl_sewa.status')
        ->get();

        return $query;
    }

    // Tampil View Detail Data tbl_sewa Join tb_users join tbl_kamar join tbl_pesan
    function viewDetailDataSewaJoin()
    {
        $query = DB::table('tbl_sewa')
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
        ->select('tbl_sewa.kode_sewa','tbl_sewa.kode_user','users.nama','users.email',
        'users.jk','users.alamat','users.no_telepon','users.status_user','users.foto_user',
        'tbl_sewa.kode_pesan','tbl_pesan.kode_kamar','tbl_kamar.nama_kamar','tbl_kamar.harga',
        'tbl_pesan.tanggal_masuk','tbl_pesan.lama_tinggal','tbl_sewa.tanggal_keluar',
        'tbl_sewa.pembayaran','tbl_sewa.status')
        ->get();

        return $query;
    }

    // Tampil Detail Data tbl_sewa Join tb_users join tbl_kamar join tbl_pesan
    function DetailDataJoin($parameter)
    {
        $query = DB::table('tbl_sewa')
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
        ->select('tbl_sewa.kode_sewa','tbl_sewa.kode_user','users.nama','users.email',
        'users.jk','users.alamat','users.no_telepon','users.status_user','users.foto_user',
        'tbl_sewa.kode_pesan','tbl_pesan.kode_kamar','tbl_kamar.nama_kamar','tbl_kamar.harga',
        'tbl_pesan.tanggal_masuk','tbl_pesan.lama_tinggal','tbl_sewa.tanggal_keluar',
        'tbl_sewa.pembayaran','tbl_sewa.status')
        ->where(DB::raw("(kode_sewa)"), "=", $parameter)
        ->orderBy("kode_sewa")
        ->get();

        return $query;
    }

    // Detail Data sewa
    function detailData($parameter)
    {
        $query = DB::table('tbl_sewa')
            ->select(
                "kode_sewa",
                "kode_pesan",
                "kode_user",
                "kode_kamar",
                "tanggal_keluar",
                "pembayaran",
                "status"
            )
            ->where(DB::raw("(kode_sewa)"), "=", $parameter)
            ->orderBy("kode_sewa")
            ->get();

        return $query;
    }

    // Delete Data sewa
    function deleteData($parameter)
    {
        DB::table("tbl_sewa")
            ->where(DB::raw("(kode_sewa)"), "=", $parameter)
            ->delete();
    }

    // Insert Data sewa
    function saveData($kode_sewa, $kode_pesan, $kode_user, $kode_kamar, $tanggal_keluar, $pembayaran, $status)
    {
        DB::table("tbl_sewa")
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
            ->insert([
                "kode_sewa" => $kode_sewa,
                "kode_pesan" => $kode_pesan,
                "kode_user" => $kode_user,
                "kode_kamar" => $kode_kamar,
                "tanggal_keluar" => $tanggal_keluar,
                "pembayaran" => $pembayaran,
                "status" => $status
            ]);
    }

    // Fungsi Untuk Cek Ubah Data
    function checkUpdate($kode_sewa_lama, $kode_sewa_baru)
    {
        // tampilkan data
        $query = DB::table("tbl_sewa")
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
            ->select("kode_sewa")
            ->where("kode_sewa", "=", $kode_sewa_baru)
            ->where(DB::raw("(kode_sewa)"), "!=", $kode_sewa_lama)
            ->get();

        return $query;
    }

    // Update Data sewa
    function updateData(
        $kode_sewa,
        $kode_pesan,
        $kode_user,
        $kode_kamar,
        $tanggal_keluar,
        $pembayaran,
        $status,
        $kode_sewa_lama
    ) {
        DB::table("tbl_sewa")
        ->join('users', 'users.kode_user', '=', 'tbl_sewa.kode_user')
        ->join('tbl_pesan', 'tbl_pesan.kode_pesan', '=', 'tbl_sewa.kode_pesan')
        ->join('tbl_kamar', 'tbl_kamar.kode_kamar', '=', 'tbl_sewa.kode_kamar')
            ->where(DB::raw("(kode_sewa)"), "=", $kode_sewa_lama)
            ->update([
                "kode_sewa" => $kode_sewa,
                "kode_pesan" => $kode_pesan,
                "kode_user" => $kode_user,
                "kode_kamar" => $kode_kamar,
                "tanggal_keluar" => $tanggal_keluar,
                "pembayaran" => $pembayaran,
                "status" => $status
            ]);
    }
}
