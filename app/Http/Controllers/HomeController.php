<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $jumlahBuku = Buku::count();
        $jumlahSiswa = User::where('usertype', 'user')->count();
        $jumlahPeminjaman = Peminjaman::where('status_peminjaman', 'Belum dikembalikan')->count();
        $jumlahPengembalian = Peminjaman::where('status_peminjaman', 'Sudah dikembalikan')->count();

        return view('admin.dashboard', compact('jumlahBuku', 'jumlahSiswa', 'jumlahPeminjaman', 'jumlahPengembalian'));
    }


    
}
