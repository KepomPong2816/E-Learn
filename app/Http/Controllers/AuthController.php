<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        $data['title'] = "Login E-Learning";

        return
            view('auth.header', $data) .
            view('auth.login', $data) .
            view('auth.footer', $data);
    }

    public function login_auth(Request $req)
    {
        $data['title'] = "MEH";

        $auth = DB::selectOne("
            SELECT
                md_auth.*
            FROM
                md_auth
            WHERE
                md_auth.EMAIL = '" . $req->input('email') . "'
            AND
                md_auth.PASSWORD = '" . hash('sha256', md5($req->input('password'))) . "'
        ");

        return
            view('template_admin.header', $data) .
            view('template_admin.sidebar', $data) .
            // view('auth.login', $data) .
            view('template_admin.dashboard') ;
            // view('auth.footer', $data);
            // view('template_main.header', $data) .
            // view('template_main.footer');
    }


}
