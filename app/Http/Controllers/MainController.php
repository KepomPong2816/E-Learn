<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $data['title'] = "E-Learning";

        return
            view('header', $data) .
            view('home', $data) .
            view('footer');
    }
}
