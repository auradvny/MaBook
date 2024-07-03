<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku;
use Illuminate\View\View;

class KategoriBukuController extends Controller
{
    public function index()
    {
        $KategoriBuku = KategoriBuku::all();
        return view('admin.KategoriBuku.index', compact('KategoriBuku'));
    }
    // Display the list of categories with pagination

    // Display the form to create a new category
    public function create(): View
    {

        return view('admin.KategoriBuku.create');
    }

    // Store a new category
    public function submit(Request $request)
    {
        $KategoriBuku = new KategoriBuku();
        $KategoriBuku->nama_kategori = $request->nama_kategori;
        $KategoriBuku->deskripsi_kategori = $request->deskripsi_kategori;
        // $KategoriBuku-> image_url =$request-> image_url;
        $KategoriBuku->save();

        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi_kategori' => 'nullable|string',
            // 'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        return redirect()->route('admin.dashboard');
    }

    function edit($id_kategori)
    {
        $KategoriBuku = KategoriBuku::find($id_kategori);
        return view('admin.KategoriBuku.edit', compact('KategoriBuku'));
    }
    function update(Request $request, $id_kategori)
    {
        $KategoriBuku = KategoriBuku::find($id_kategori);
        $KategoriBuku->nama_kategori = $request->nama_kategori;
        $KategoriBuku->deskripsi_kategori = $request->deskripsi_kategori;
        // $KategoriBuku-> image_url =$request-> image_url;
        $KategoriBuku->update();

        return redirect()->route('admin.dashboard');
    }

    function delete($id_kategori)
    {
        $KategoriBuku = KategoriBuku::find($id_kategori);
        $KategoriBuku->delete();
        return redirect()->route('admin.dashboard');
    }
}
