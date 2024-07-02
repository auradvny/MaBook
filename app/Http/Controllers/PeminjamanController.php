<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Buku;
class PeminjamanController extends Controller
{
    public function tampil(): View
    {
        $Peminjaman = Peminjaman::get();
        return view('admin.Peminjaman.manage', compact('Peminjaman'));
    }

    public function create(): View
    {
        return view('admin.Peminjaman.create');
    }
    // Store a new category
    public function submit(Request $request)
    {
        $Peminjaman = new Buku();
        $Peminjaman-> judul_buku =$request-> judul_buku;
        $Peminjaman-> penulis_buku =$request-> penulis_buku;
        $Peminjaman-> tahun_terbit =$request-> tahun_terbit;
        $Peminjaman-> jumlah_halaman =$request-> jumlah_halaman;
        $Peminjaman->save();
    

    return redirect()-> route ('admin.Buku.manage');
    }


}
