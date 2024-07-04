<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $PeminjamanBelumDikembalikan = Peminjaman::where('status_peminjaman', 'Belum dikembalikan')->with('User', 'Buku')->get();
        $PeminjamanDikembalikan = Peminjaman::where('status_peminjaman', 'Sudah dikembalikan')->with('User', 'Buku')->get();

        return view('admin.Peminjaman.manage', compact('PeminjamanBelumDikembalikan', 'PeminjamanDikembalikan'));
    }

    // public function index()
    // {
    //     // $user_id = Auth::id();
    //     // $peminjaman = Peminjaman::where('user_id', $user_id)->with('buku')->get();

    //     // return view('peminjaman', compact('peminjaman'));
    //     $Peminjaman = Peminjaman::get();
    //     return view('admin.Peminjaman.manage', compact('Peminjaman'));
    // }

    public function userindex()
    {
        // Mendapatkan data peminjaman berdasarkan user yang sedang login, hanya yang belum dikembalikan dan diurutkan berdasarkan id_peminjaman terbaru
        $peminjamans = Peminjaman::where('user_id', Auth::id())
            ->where('status_peminjaman', 'belum dikembalikan')
            ->orderBy('id_peminjaman', 'desc')
            ->get();

        return view('peminjaman', compact('peminjamans'));
    }

    public function userkembali()
    {
        // Mendapatkan data peminjaman berdasarkan user yang sedang login, hanya yang belum dikembalikan dan diurutkan berdasarkan id_peminjaman terbaru
        $pengembalians = Peminjaman::where('user_id', Auth::id())
            ->where('status_peminjaman', 'sudah dikembalikan')
            ->orderBy('id_peminjaman', 'desc')
            ->get();

        return view('pengembalian', compact('pengembalians'));
    }



    public function tampil()
    {
        $User = User::all();
        $Buku = Buku::all();
        return view('admin.Peminjaman.create', compact('User', 'Buku')); // Mengirimkan variabel $KategoriBuku ke view
    }

    // public function create()
    // {
    //     $User = User::where('usertype', 'user')->get();
    //     $Buku = Buku::all();
    //     $statuses = ['belum dikembalikan']; // Jika ada status lain, tambahkan di sini

    //     return view('admin.Peminjaman.create', compact('User', 'Buku', 'statuses'));
    // }

    public function create()
    {
        $User = User::where('usertype', 'user')->get();
        $Buku = Buku::whereDoesntHave('peminjaman', function ($query) {
            $query->where('status_peminjaman', 'belum dikembalikan');
        })->get();
        $statuses = ['sudah dikembalikan']; // Jika ada status lain, tambahkan di sini

        return view('admin.peminjaman.create', compact('User', 'Buku', 'statuses'));
    }
    public function submit(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
        ]);

        $tanggal_peminjaman = Carbon::parse($request->tanggal_peminjaman);
        $tanggal_pengembalian = $tanggal_peminjaman->copy()->addDays(3);

        Peminjaman::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'tanggal_peminjaman' => $tanggal_peminjaman,
            'tanggal_pengembalian' => $tanggal_pengembalian,
            'status_peminjaman' => 'belum dikembalikan',
        ]);

        return redirect()->route('admin.Peminjaman.manage')->with('success', 'Peminjaman berhasil ditambahkan');
    }
    // public function create(): View
    // {
    //     $User = User::all();
    //     $Buku = Buku::all();
    //     $statuses = ['belum dikembalikan', 'sudah dikembalikan'];
    //     return view('admin.Peminjaman.create', compact('User', 'Buku', 'statuses'));
    // }


    // Store a new category
    // public function submit(Request $request)
    // {
    //     // Validate the request data



    //     //  // Save the data to the database
    //     $Peminjaman = new Peminjaman();
    //     $Peminjaman->user_id = $request->user_id;
    //     $Peminjaman->buku_id = $request->buku_id;
    //     $Peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
    //     $Peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
    //     $Peminjaman->status_peminjaman = $request->status_peminjaman;
    //     $Peminjaman->save();



    //     return redirect()->route('admin.Peminjaman.manage')->with('success', 'Peminjaman berhasil ditambahkan');
    // }

    function edit($id_peminjaman)
    {
        $Peminjaman = Peminjaman::find($id_peminjaman);
        $User = User::all();
        $Buku = Buku::all();
        $statuses = ['Belum Dikembalikan', 'Sudah Dikembalikan'];
        return view('admin.Peminjaman.edit', compact('Peminjaman', 'User', 'Buku', 'statuses'));
    }
    // function update(Request $request, $id_peminjaman)
    // {
    //     $Peminjaman = Peminjaman::find($id_peminjaman);
    //     $Peminjaman->buku_id = $request->buku_id;
    //     $Peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
    //     $Peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
    //     $Peminjaman->status_peminjaman = $request->status_peminjaman;
    //     $Peminjaman->update();

    //     return redirect()->route('admin.Peminjaman.manage');
    // }
    function update(Request $request, $id_peminjaman)
    {
        $Peminjaman = Peminjaman::find($id_peminjaman);
        $Peminjaman->buku_id = $request->buku_id;
        $Peminjaman->status_peminjaman = $request->status_peminjaman;

        // Hitung denda jika status peminjaman sudah dikembalikan
        if ($request->status_peminjaman == 'Sudah Dikembalikan') {
            $tanggal_pengembalian = new \DateTime($Peminjaman->tanggal_pengembalian);
            $tanggal_dikembalikan = new \DateTime(); // updated_at akan diatur secara otomatis
            $selisih = $tanggal_dikembalikan->diff($tanggal_pengembalian)->days;

            if ($selisih > 0) {
                $denda = $selisih * 2000;
                $Peminjaman->denda = $denda;
            } else {
                $Peminjaman->denda = 0;
            }
        }

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
