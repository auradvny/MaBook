<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use App\Models\Buku;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $KategoriBuku = KategoriBuku::orderBy('id_kategori', 'desc')->get();
        $total = KategoriBuku::count();
        return view('admin.dashboard', compact(['KategoriBuku', 'total']));
    }


    // public function tampil()
    // {
    //     $KategoriBuku = KategoriBuku::Get();
    //     return view('dashboard', compact('KategoriBuku'));
    // }
}
