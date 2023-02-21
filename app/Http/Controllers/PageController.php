<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }

    public function about() {
            return '2141720256 -- Fina Orivia Nurfadillah';
            }

    public function articles($id) {
            return "Halaman Artikel ke ($id)";
                }
}