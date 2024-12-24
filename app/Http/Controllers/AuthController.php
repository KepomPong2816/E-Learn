<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Login E-Learning";

        return
            view('header', $data) .
            view('auth.login', $data) .
            view('footer', $data);
    }

    public function login_auth(Request $req)
    {
        $check_email = DB::selectOne("
            SELECT
                ma.*
            FROM
                md_auth ma
            WHERE
                ma.EMAIL = '" . $req->input('email') . "'
        ");

        $auth = DB::selectOne("
            SELECT
                ma.*
            FROM
                md_auth ma
            WHERE
                ma.EMAIL = '" . $req->input('email') . "'
            AND
                ma.PASSWORD = '" . hash('sha256', md5($req->input('password'))) . "'
        ");

        if (!empty($check_email)) {
            if (!empty($auth)) {
                $user_data = collect([
                    'KODE_USER' => $auth->KODE_USER,
                    'EMAIL' => $auth->EMAIL,
                    'ROLE' => $auth->ROLE,
                    'IS_COC' => $auth->IS_COC,
                    'IS_EVENT' => $auth->IS_EVENT,
                    'KODE_PENDAFTARAN' => null,
                    'NAME' => $auth->NAMA,
                    'HP' => $auth->NO_TELP
                ]);
                Session::push('user', $user_data);

                return redirect('/dashboard');
            }
        } else {
            return redirect('/login')->with('msg', 'Email tidak terdaftar');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
