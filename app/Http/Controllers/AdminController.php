<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahBuku = Buku::count();
        $jumlahUser = User::count();

        return view('admin.dashboard', compact('jumlahBuku', 'jumlahUser'));
    }
}
