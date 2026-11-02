<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('user.beranda');
    }

    public function listBuku()
    {
        return view('user.buku.listBuku');
    }

    public function detailBuku(int $id)
    {
        return view('user.buku.detailBuku', ['id' => $id]);
    }
}
