<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class BukuPinjamController extends Controller
{
    public function index($id_buku)
    {
        $Buku = Buku::findOrFail($id_buku);
        return view(' peminjaman', compact('Buku'));
    }

    public function submit(Request $request, $id_buku)
    {
        // Validasi request
        

        // Simpan data peminjaman
        $Peminjaman = new Peminjaman();
        $Peminjaman->user_id = Auth::id();
        $Peminjaman->buku_id = $id_buku;
        $Peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $Peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
       
        $Peminjaman->save();

        // Redirect ke halaman peminjaman dengan pesan sukses
        return redirect()->route('peminjaman')->with('success', 'Buku berhasil dipinjam');
    }

public function showDetail($id_buku)
{
    $Buku = Buku::findOrFail($id_buku);
    $Buku = Peminjaman::with('Buku')->get();
    $statuses = ['Dipinjam']; // Example statuses

    return view('peminjaman', compact('Buku', 'Buku', 'statuses'));
}

}