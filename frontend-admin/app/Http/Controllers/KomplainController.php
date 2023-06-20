<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomplainController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewKomplain()
    {
        // $this->client = new \GuzzleHttp\Client();
        // echo env("API_URL");

        // untuk get dari data server
        $url = env("API_URL") . "viewKomplain";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "tampil_komplain"

        return view("Admin.vw_komplain.tampil_komplain", $data);
    }

    // fungsi untuk hapus data user
    function deleteKomplain($parameter)
    {
        $kode = ($parameter);
        // url untuk delete dari data server
        $url = env("API_URL") . "deleteKomplain/" . $kode;

        // ambil service "delete" dari server
        $request = $this->client->delete($url);

        // menampilkan hasil dari delete server
        $response = $request->getBody();

        // kirim hasil service "delete" ke "tampil_user"
        echo $response;
    }

    // fungsi untuk detail data user
    function detailKomplain($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_user dari data server
        $url = env("API_URL") . "detailKomplain/" . $kode;

        // ambil service "detail_user" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_user server
        $response = $request->getBody();

       // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "detail_user"

        return view("Admin.vw_komplain.detail_komplain", $data);
    }

    function addKomplain()
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
        return view("Admin.vw_komplain.tambah_komplain", $data);
    }

    // buat fungsi untuk simpan data
    function insertKomplain(Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL") . "insertKomplain";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
                "kode_komplain" => $req->kode_komplain,
                "kode_user" => $req->kode_user,
                "kode_kamar" => $req->kode_kamar,
                "perihal" => $req->perihal,
                "isi" => $req->isi,
                "status" => $req->status,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_user"
            echo $response;
    }

    // buat fungsi untuk update data
    // fungsi untuk detail data user
    function updateKomplain($parameter)
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

        // url untuk detail_komplain dari data server
        $url = env("API_URL") . "detailKomplain/" . $parameter;

        // ambil service "detail_user" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_user server
        $response = $request->getBody();

       // tampilkan data

        foreach (json_decode($response)->DetailKomplain as $hasil) {
            $data = [
                "kode_komplain" => $hasil->kode_komplain,
                "kode_user" => $hasil->kode_user,
                "kode_kamar" => $hasil->kode_kamar,
                "perihal" => $hasil->perihal,
                "isi" => $hasil->isi,
                "status" => $hasil->status,
                "kode_komplain_lama" => $parameter,
            ];
        }

        // Menggabungkan data dari kedua server
        $data3 = array_merge($data1, $data2);

        return view("Admin.vw_komplain.edit_komplain", $data,$data3);
    }

    function editKomplain($parameter,Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL")."updateKomplain/".$parameter;

        // ambil service "post" dari server
        $request = $this->client->put($url,[
            "form_params" => [
                "kode_komplain" => $req->kode_komplain,
                "kode_user" => $req->kode_user,
                "kode_kamar" => $req->kode_kamar,
                "perihal" => $req->perihal,
                "isi" => $req->isi,
                "status" => $req->status,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_user"
            echo $response;
    }
}
