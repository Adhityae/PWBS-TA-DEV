<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewTampilKamar()
    {
        // $this->client = new \GuzzleHttp\Client();
        // echo env("API_URL");

        // untuk get dari data server
        $url = env("API_URL") . "viewKamar";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "tampil_kamar"

        return view("User.tampil_datakamar", $data);
    }

// fungsi untuk hapus data Kamar
    function deleteKamar($parameter)
    {
        $kode = ($parameter);
        // url untuk delete dari data server
        $url = env("API_URL")."deleteKamar/".$kode;

        // ambil service "delete" dari server
        $request = $this->client->delete($url);

        // menampilkan hasil dari delete server
        $response = $request->getBody();

        // kirim hasil service "delete" ke "tampil_Kamar"
        echo $response;
    }

    // fungsi untuk detail data Kamar
    function detailKamar($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_Kamar dari data server
        $url = env("API_URL") . "detailKamar/" . $kode;

        // ambil service "detail_Kamar" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_Kamar server
        $response = $request->getBody();

       // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "detail_Kamar"

        return view("User.detail_kamar", $data);
    }

    function addKamar()
    {
        // tampilkan view "tambah_Kamar"
        return view("Admin.vw_kamar.tambah_kamar");
    }

    // buat fungsi untuk simpan data
    function insertKamar(Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL") . "insertKamar";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
                "kode_kamar" => $req->kode_kamar,
                "nama_kamar" => $req->nama_kamar,
                "lantai" => $req->lantai,
                "deskripsi_kamar" => $req->deskripsi_kamar,
                "status" => $req->status,
                "harga" => $req->harga,
                "foto_kamar" => $req->foto_kamar,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_Kamar"
            echo $response;
    }

    // buat fungsi untuk update data
    // fungsi untuk detail data Kamar
    function updateKamar($parameter)
    {

        // url untuk detail_Kamar dari data server
        $url = env("API_URL") . "detailKamar/" . $parameter;

        // ambil service "detail_Kamar" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_Kamar server
        $response = $request->getBody();

       // tampilkan data

        foreach (json_decode($response)->DetailKamar as $hasil) {
            $data = [
                "kode_kamar" => $hasil->kode_kamar,
                "nama_kamar" => $hasil->nama_kamar,
                "lantai" => $hasil->lantai,
                "deskripsi_kamar" => $hasil->deskripsi_kamar,
                "status" => $hasil->status,
                "harga" => $hasil->harga,
                "foto_kamar" => $hasil->foto_kamar,
                "kode_kamar_lama" => $parameter,
            ];
        }

        // panggil view "detail_Kamar"

        return view("Admin.vw_kamar.edit_kamar", $data);
    }

    function editKamar($parameter,Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL")."updateKamar/".$parameter;

        // ambil service "post" dari server
        $request = $this->client->put($url,[
            "form_params" => [
               "kode_kamar" => $req->kode_kamar,
                "nama_kamar" => $req->nama_kamar,
                "lantai" => $req->lantai,
                "deskripsi_kamar" => $req->deskripsi_kamar,
                "status" => $req->status,
                "harga" => $req->harga,
                "foto_kamar" => $req->foto_kamar,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_Kamar"
            echo $response;
    }
}
