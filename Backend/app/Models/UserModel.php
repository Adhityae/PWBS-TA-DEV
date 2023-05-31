<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    // Tampil Data User
    function viewData()
    {
        $query = DB::table('users')
            ->select(
                "kode_user",
                "nama",
                "email",
                "password",
                "jk",
                "alamat",
                "no_telepon",
                "status_user",
                "role",
                "foto_user"

            )
            ->orderBy("kode_user")
            ->get();

        return $query;
    }

    // Tampil Data User Join

    // Detail Data User
    function detailData($parameter)
    {
        $query = DB::table('users')
            ->select(
                "kode_user",
                "nama",
                "email",
                "password",
                "jk",
                "alamat",
                "no_telepon",
                "status_user",
                "role",
                "foto_user"
            )
            ->where(DB::raw("(kode_user)"), "=", $parameter)
            ->orderBy("kode_user")
            ->get();

        return $query;
    }

    // Delete Data User
    function deleteData($parameter)
    {
        DB::table("users")
            ->where(DB::raw("(kode_user)"), "=", $parameter)
            ->delete();
    }

    // Insert Data User
    function saveData($kode_user, $nama, $email, $password, $jk, $alamat, $no_telepon, $status_user, $foto_user, $role)
    {
        DB::table("users")
            ->insert([
                "kode_user" => $kode_user,
                "nama" => $nama,
                "email" => $email,
                "password" => $password,
                "jk" => $jk,
                "alamat" => $alamat,
                "no_telepon" => $no_telepon,
                "status_user" => $status_user,
                "foto_user" => $foto_user,
                "role" => $role
            ]);
    }

    // fungsi untuk cek ubah data
    function checkUpdate($kode_user_lama, $kode_user_baru)
    {
        // tampilkan data
        $query = DB::table("users")
            ->select("kode_user")
            ->where("kode_user", "=", $kode_user_baru)
            ->where(DB::raw("(kode_user)"), '!=', $kode_user_lama)
            ->get();

        return $query;
    }

    // Update Data User
    function updateData(
        $kode_user,
        $nama,
        $email,
        $password,
        $jk,
        $alamat,
        $no_telepon,
        $status_user,
        $foto_user,
        $role,
        $kode_user_lama
    ) {
        DB::table("users")
            ->where(DB::raw("(kode_user)"), "=", $kode_user_lama)
            ->update([
                "kode_user" => $kode_user,
                "nama" => $nama,
                "email" => $email,
                "password" => $password,
                "jk" => $jk,
                "alamat" => $alamat,
                "no_telepon" => $no_telepon,
                "status_user" => $status_user,
                "foto_user" => $foto_user,
                "role" => $role

            ]);
    }
}
