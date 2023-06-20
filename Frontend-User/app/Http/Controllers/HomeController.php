<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

     function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat Fungsi index (tampil data kayrawan)
    function viewHomeUser()
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

        return view("User/dashboard_user", $data);
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

    function viewHubungiKami()
    {
        return view("User/hubungi_kami");
    }

    function viewCekTagihan()
    {
        return view("User/cek_tagihan");
    }

    function viewDetailKamar()
    {
        return view("User/detail_kamar");
    }
    function viewTambahUser()
    {
        return view("User/tambah_datauser");
    }

    function viewTambahPesan()
    {
        return view("User/tambah_datapesan");
    }

}
