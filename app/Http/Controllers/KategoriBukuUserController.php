<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use App\Models\Buku;
use Illuminate\Http\Request;

class KategoriBukuUserController extends Controller
{
    public function index()
    {
        $KategoriBuku = KategoriBuku::all(); // Mengambil semua data kategori buku
        return view('dashboard', compact('KategoriBuku')); // Mengirimkan data ke view 'kategori.index'
    }

    public function bukuByKategori($id_kategori)
    {
        $KategoriBuku = KategoriBuku::findOrFail($id_kategori);
        $Buku = Buku::where('kategori_id', $id_kategori)->get();

        return view('koleksi', compact('Buku', 'KategoriBuku'));
    }
    public function pinjam($id_buku)
    {
        // Lakukan proses peminjaman buku berdasarkan $id_buku
        $Buku = Buku::find($id_buku);
        return view('pinjam', compact('Buku'));

        // Contoh tindakan peminjaman
        //       if ($Buku) {

        //    return redirect()->route('dashboard')->with('success', 'Buku berhasil dipinjam!');
        //      } else {
        //        return redirect()->route('dashboard')->with('error', 'Buku tidak ditemukan atau tidak dapat dipinjam saat ini.');
        //         }
    }
}
