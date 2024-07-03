<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        // $user_id = Auth::id();
        // $peminjaman = Peminjaman::where('user_id', $user_id)->with('buku')->get();

        // return view('peminjaman', compact('peminjaman'));
        $Peminjaman = Peminjaman::get();
        return view('admin.Peminjaman.manage', compact('Peminjaman'));
    }

    public function userindex()
    {
        $peminjamans = Peminjaman::where('user_id', Auth::id())->get();
        return view('peminjaman', compact('peminjamans'));
    }

    public function tampil()
    {
        $User = User::all();
        $Buku = Buku::all();
        return view('admin.Peminjaman.create', compact('User', 'Buku')); // Mengirimkan variabel $KategoriBuku ke view
    }
    public function create(): View
    {
        $User = User::all();
        $Buku = Buku::all();
        $statuses = ['belum dikembalikan', 'sudah dikembalikan'];
        return view('admin.Peminjaman.create', compact('User', 'Buku', 'statuses'));
    }


    // Store a new category
    public function submit(Request $request)
    {
        // Validate the request data



        //  // Save the data to the database
        $Peminjaman = new Peminjaman();
        $Peminjaman->user_id = $request->user_id;
        $Peminjaman->buku_id = $request->buku_id;
        $Peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $Peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
        $Peminjaman->status_peminjaman = $request->status_peminjaman;
        $Peminjaman->save();



        return redirect()->route('admin.Peminjaman.manage')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    function edit($id_peminjaman)
    {
        $Peminjaman = Peminjaman::find($id_peminjaman);
        $User = User::all();
        $Buku = Buku::all();
        $statuses = ['Belum Dikembalikan', 'Sudah Dikembalikan'];
        return view('admin.Peminjaman.edit', compact('Peminjaman', 'User', 'Buku', 'statuses'));
    }
    function update(Request $request, $id_peminjaman)
    {
        $Peminjaman = Peminjaman::find($id_peminjaman);
        $Peminjaman->buku_id = $request->buku_id;
        $Peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $Peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
        $Peminjaman->status_peminjaman = $request->status_peminjaman;
        $Peminjaman->update();

        return redirect()->route('admin.Peminjaman.manage');
    }

    function delete($id_peminjaman)
    {
        $Peminjaman = Peminjaman::find($id_peminjaman);
        $Peminjaman->delete();
        return redirect()->route('admin.Peminjaman.manage');
    }
}
