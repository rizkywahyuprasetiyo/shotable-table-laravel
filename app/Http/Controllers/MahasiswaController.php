<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tambah()
    {
        return view('tambah');
    }
}
