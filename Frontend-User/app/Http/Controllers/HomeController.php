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
        $url = env("API_URL") . "viewSewa";
        // echo $url;


        // ambil service "get" dari server
        $request = $this->client->get($url);


        // menampilkan hasil
        $response = $request->getBody();

        // tampilkan data

        $data["result"] = json_decode($response);

        // panggil view "dashboard user"

        return view("User/dashboard_user", $data);
    }
}
