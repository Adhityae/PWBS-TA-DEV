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

        return view("User.vw_komplain.tampil_komplain", $data);
    }

    function insertKomplain()
    {
        // tampilkan view "tambah komplain"
        return view("User.vw_komplain.tambah_komplain");
    }
}
