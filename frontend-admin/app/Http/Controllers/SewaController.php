<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewaController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewSewa()
    {
        // $this->client = new \GuzzleHttp\Client();
        // echo env("API_URL");

        // untuk get dari data server
        $url = env("API_URL") . "viewSewa";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "tampil_sewa"

        return view("Admin.vw_sewa.tampil_sewa", $data);
    }

// fungsi untuk hapus data sewa
    function deleteSewa($parameter)
    {
        $kode = ($parameter);
        // url untuk delete dari data server
        $url = env("API_URL") . "deleteSewa/" . $kode;

        // ambil service "delete" dari server
        $request = $this->client->delete($url);

        // menampilkan hasil dari delete server
        $response = $request->getBody();

        // kirim hasil service "delete" ke "tampil_sewa"
        echo $response;
    }

    // fungsi untuk detail data sewa
    function detailSewa($parameter)
    {
        $kode = ($parameter);
        // url untuk detail_sewa dari data server
        $url = env("API_URL") . "detailSewa/" . $kode;

        // ambil service "detail_sewa" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_sewa server
        $response = $request->getBody();

       // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "detail_sewa"

        return view("Admin.vw_sewa.detail_sewa", $data);
    }

    function addSewa()
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

        // Mengambil data dari server kedua
        $url3 = env("API_URL") . "viewPesan";
        $request3 = $this->client->get($url3);
        $response3 = $request3->getBody();
        $data3["result3"] = json_decode($response3);

        // Menggabungkan data dari kedua server
        $data = array_merge($data1, $data2, $data3);

        // tampilkan view "tambah_user"
        return view("Admin.vw_sewa.tambah_sewa", $data );
    }

    // buat fungsi untuk simpan data
    function insertSewa(Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL") . "insertSewa";

        // ambil service "post" dari server
        $request = $this->client->post($url,[
            "form_params" => [
                "kode_sewa" => $req->kode_sewa,
                "kode_pesan" => $req->kode_pesan,
                "kode_user" => $req->kode_user,
                "kode_kamar" => $req->kode_kamar,
                "tanggal_keluar" => $req->tanggal_keluar,
                "pembayaran" => $req->pembayaran,
                "status" => $req->status,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_sewa"
            echo $response;
    }

    // buat fungsi untuk update data
    // fungsi untuk detail data user
    function updateSewa($parameter)
    {
        // url untuk detail_sewa dari data server
        $url = env("API_URL") . "detailSewa/" . $parameter;

        // ambil service "detail_sewa" dari server
        $request = $this->client->get($url);

        // menampilkan hasil dari detail_sewa server
        $response = $request->getBody();

       // tampilkan data

        foreach (json_decode($response)->DetailSewa as $hasil) {
            $data = [
                "kode_sewa" => $hasil->kode_sewa,
                "kode_pesan" => $hasil->kode_pesan,
                "kode_user" => $hasil->kode_user,
                "kode_kamar" => $hasil->kode_kamar,
                "tanggal_keluar" => $hasil->tanggal_keluar,
                "pembayaran" => $hasil->pembayaran,
                "status" => $hasil->status,
                "kode_sewa_lama" => $parameter,
            ];
        }

        // panggil view "detail_sewa"

        return view("Admin.vw_sewa.edit_sewa", $data);
    }

    function editSewa($parameter,Request $req)
    {
        // untuk post dari data server
        $url = env("API_URL")."updateSewa/".$parameter;

        // ambil service "post" dari server
        $request = $this->client->put($url,[
            "form_params" => [
                "kode_sewa" => $req->kode_sewa,
                "kode_pesan" => $req->kode_pesan,
                "kode_user" => $req->kode_user,
                "kode_kamar" => $req->kode_kamar,
                "tanggal_keluar" => $req->tanggal_keluar,
                "pembayaran" => $req->pembayaran,
                "status" => $req->status,
            ]
            ]);

            // menampilkan hasil dari post server
            $response = $request->getBody();

            // kirim hasil service "post" ke "tambah_user"
            echo $response;
    }
}
