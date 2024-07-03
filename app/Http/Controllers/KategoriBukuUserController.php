<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriBukuUserController extends Controller
{
    public function index()
    {
        $KategoriBuku = KategoriBuku::all(); // Mengambil semua data kategori buku
        return view('dashboard', compact('KategoriBuku')); // Mengirimkan data ke view 'kategori.index'
    }

    public function bukuByKategori($id_kategori)
    {
        $userId = Auth::id(); // Mendapatkan ID user yang sedang login
        $KategoriBuku = KategoriBuku::findOrFail($id_kategori);

        // Mendapatkan ID buku yang status peminjamannya belum dikembalikan oleh user
        $bukuYangBelumDikembalikan = Peminjaman::where('user_id', $userId)
            ->where('status_peminjaman', 'belum dikembalikan')
            ->pluck('buku_id')
            ->toArray();

        // Mendapatkan buku berdasarkan kategori dan tidak termasuk yang belum dikembalikan oleh user
        $Buku = Buku::where('kategori_id', $id_kategori)
            ->whereNotIn('id_buku', $bukuYangBelumDikembalikan)
            ->get();

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

    public function submit(Request $request, $id_buku)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required|date',
        ]);

        $tanggal_peminjaman = Carbon::parse($request->tanggal_peminjaman);
        $tgl_pengembalian = $tanggal_peminjaman->copy()->addDays(3);

        Peminjaman::create([
            'user_id' => Auth::id(),
            'buku_id' => $id_buku,
            'tanggal_peminjaman' => $tanggal_peminjaman,
            'tanggal_pengembalian' => $tgl_pengembalian,
            'status_peminjaman' => 'belum dikembalikan',
        ]);

        return redirect()->route('daftarpinjam')->with('success', 'Buku berhasil dipinjam!');
    }
}
