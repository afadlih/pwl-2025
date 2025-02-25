<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return ('Selamat Datang');
    }
    public function about() {
        return ('Ahamad Fadlih Wahyu Sardana 2341720069');
    }
    public function articles($id) {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
