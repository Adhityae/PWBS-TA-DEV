<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewPesan()
    {
        // $this->client = new \GuzzleHttp\Client();
        // echo env("API_URL");

        // untuk get dari data server
        $url = env("API_URL") . "viewPesan";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "tampil_pesan"

        return view("Admin.vw_pesan.tampil_pesan", $data);
    }

// fungsi untuk hapus data user
    function deletePesan($parameter)
    {
        $kode = ($parameter);
        // url untuk delete dari data server
        $url = env("API_URL") . "deletePesan/" . $kode;

        // ambil service "delete" dari server
        $request = $this->client->delete($url);

        // menampilkan hasil dari delete server
        $response = $request->getBody();

        // kirim hasil service "delete" ke "tampil_pesan"
        echo $response;
    }

    // fungsi untuk detail data pesan
    function detailPesan($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_pesan dari data server
        $url = env("API_URL") . "detailPesan/" . $kode;

        // ambil service "detail_pesan" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_pesan server
        $response = $request->getBody();

       // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "detail_pesan"

        return view("Admin.vw_pesan.detail_pesan", $data);
    }

    function addPesan()
    {
        // Mengambil data dari server pertama
        $url1 = env("API_URL") . "viewKamar";
        $request1 = $this->client->get($url1);
        $response1 = $request1->getBody();
        $data1["result1"] = json_decode($response1);

        // Mengambil data dari server kedua
        $url2 = env("API_URL") . "viewUser";
        $request2 = $this->client->get($url2);
        $response2 = $request2->getBody();
        $data2["result2"] = json_decode($response2);

        // Menggabungkan data dari kedua server
        $data = array_merge($data1, $data2);

        // tampilkan view "tambah_user"
        return view("User.tambah_datapesan", $data);
    }

    // buat fungsi untuk simpan data
    function insertPesan(Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL") . "insertPesan";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
                "kode_pesan" => $req->kode_pesan,
                "kode_kamar" => $req->kode_kamar,
                "kode_user" => $req->kode_user,
                "tanggal_masuk" => $req->tanggal_masuk,
                "lama_tinggal" => $req->lama_tinggal,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_pesan"
            echo $response;
    }

    // buat fungsi untuk update data
    // fungsi untuk detail data user
    function updatePesan($parameter)
    {
        // url untuk detail_pesan dari data server
        $url = env("API_URL") . "detailPesan/" . $parameter;

        // ambil service "detail_pesan" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_pesan server
        $response = $request->getBody();

       // tampilkan data

        foreach (json_decode($response)->DetailPesan as $hasil) {
            $data = [
                "kode_pesan" => $hasil->kode_pesan,
                "kode_kamar" => $hasil->kode_kamar,
                "kode_user" => $hasil->kode_user,
                "tanggal_masuk" => $hasil->tanggal_masuk,
                "lama_tinggal" => $hasil->lama_tinggal,
                "kode_pesan_lama" => $parameter,
            ];
        }

        // panggil view "detail_pesan"

        return view("Admin.vw_pesan.edit_pesan", $data);
    }

    function editPesan($parameter,Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL")."updatePesan/".$parameter;

        // ambil service "post" dari server
        $request = $this->client->put($url,[
            "form_params" => [
                "kode_pesan" => $req->kode_pesan,
                "kode_kamar" => $req->kode_kamar,
                "kode_user" => $req->kode_user,
                "tanggal_masuk" => $req->tanggal_masuk,
                "lama_tinggal" => $req->lama_tinggal,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_pesan"
            echo $response;
    }
}

