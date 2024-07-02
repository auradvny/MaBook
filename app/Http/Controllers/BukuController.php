<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\KategoriBuku;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $KategoriBuku = KategoriBuku::all(); // Mengambil semua kategori buku
        return view('dashboard', compact('KategoriBuku')); // Mengirimkan variabel $KategoriBuku ke view
    }

    public function tampil(): View
    {
        $Buku = Buku::get();
        return view('admin.Buku.manage', compact('Buku'));
    }

    public function create(): View
    {
        $KategoriBuku = KategoriBuku::all(); // Ambil semua kategori buku
        return view('admin.Buku.create', compact('KategoriBuku'));
    }


    // Store a new category
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
    function edit($id_buku){
        $Buku=Buku::find($id_buku);
        return view('admin.Buku.edit', compact('Buku'));
    }
    function update( Request $request, $id_buku){
        $Buku=Buku::find($id_buku);
        $Buku-> judul_buku =$request-> judul_buku;
        $Buku-> penulis_buku =$request-> penulis_buku;
        $Buku-> tahun_terbit =$request-> tahun_terbit;
        $Buku-> jumlah_halaman =$request-> jumlah_halaman;
        $Buku->update();

    return redirect()-> route ('admin.Buku.manage');
    }

    function delete($id_buku){
        $Buku=Buku::find($id_buku);
        $Buku->delete();
        return redirect()-> route ('admin.Buku.manage');
    }
    
    }



