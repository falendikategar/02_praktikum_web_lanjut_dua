<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Nama : Falendika Tegar Pratama <br>";
        echo "NIM : 2141720107";
    }

    public function articles($id) {
        echo "Halaman Artikel dengan Id $id";
    }
}
