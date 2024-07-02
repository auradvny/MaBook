<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuPinjamController extends Controller
{
    public function peminjaman()
    {
        $Buku = Buku::all();
        return view(' peminjaman', compact('Buku'));
    }

    // Method to handle book borrowing
    
    public function submit(Request $request)
    {
        $Buku = new Buku();
        $Buku-> judul_buku =$request-> judul_buku;
        $Buku-> penulis_buku =$request-> penulis_buku;
        $Buku-> tahun_terbit =$request-> tahun_terbit;
        $Buku-> jumlah_halaman =$request-> jumlah_halaman;
        $Buku->kategori_id = $request->kategori_id; 
        $Buku->save();
    

    return redirect()-> route ('admin.Buku.manage')->with('success', 'Buku berhasil ditambahkan');
}
}