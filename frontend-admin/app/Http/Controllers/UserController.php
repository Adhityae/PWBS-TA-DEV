<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewUser()
    {
        // $this->client = new \GuzzleHttp\Client();
        // echo env("API_URL");

        // untuk get dari data server
        $url = env("API_URL") . "viewUser";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "tampil_user"

        return view("Admin.vw_user.tampil_user", $data);
    }

    // fungsi untuk hapus data user
    function deleteUser($parameter)
    {
        $kode = ($parameter);
        // url untuk delete dari data server
        $url = env("API_URL") . "deleteUser/" . $kode;

        // ambil service "delete" dari server
        $request = $this->client->delete($url);

        // menampilkan hasil dari delete server
        $response = $request->getBody();

        // kirim hasil service "delete" ke "tampil_user"
        echo $response;
    }

    // fungsi untuk detail data user
    function detailUser($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_user dari data server
        $url = env("API_URL") . "detailUser/" . $kode;

        // ambil service "detail_user" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_user server
        $response = $request->getBody();

       // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "detail_user"

        return view("Admin.vw_user.detail_user", $data);
    }

    function addUser()
    {
        // tampilkan view "tambah_user"
        return view("Admin.vw_user.tambah_user");
    }

    // buat fungsi untuk simpan data
    function insertUser(Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL") . "insertUser";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
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
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_user"
            echo $response;
    }

    // buat fungsi untuk update data
    // fungsi untuk detail data user
    function updateUser($parameter)
    {

        // url untuk detail_user dari data server
        $url = env("API_URL") . "detailUser/" . $parameter;

        // ambil service "detail_user" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_user server
        $response = $request->getBody();

       // tampilkan data

        foreach (json_decode($response)->DetailUser as $hasil) {
            $data = [
                "kode_user" => $hasil->kode_user,
                "nama" => $hasil->nama,
                "email" => $hasil->email,
                "password" => $hasil->password,
                "jk" => $hasil->jk,
                "alamat" => $hasil->alamat,
                "no_telepon" => $hasil->no_telepon,
                "status_user" => $hasil->status_user,
                "foto_user" => $hasil->foto_user,
                "role" => $hasil->role,
                "kode_user_lama" => $parameter,
            ];
        }

        // panggil view "detail_user"

        return view("Admin.vw_user.edit_user", $data);
    }

    function editUser($parameter,Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL")."updateUser/".$parameter;

        // ambil service "post" dari server
        $request = $this->client->put($url,[
            "form_params" => [
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
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_user"
            echo $response;
    }
}
