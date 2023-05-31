<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;
use Session;

class LoginController extends Controller
{
    // Function Login
    public function login()
    {
        return view('login');
    }

    public function loginApi(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        try {

            $http = new \GuzzleHttp\Client;
            $email = $request->email;
            $password = $request->password;

            $response = $http->post('http://127.0.0.1:8000/api/login?', [
                'headers' => [
                    'Authorization' => 'Bearer' . session()->get('token.access_token')
                ],
                'query' => [
                    'email' => $email,
                    'password' => $password
                ]
            ]);

            $result = json_decode((string)$response->getBody(), true);
            return redirect()->route('dashboard_user');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Login fail, Please try again.');
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
