<?php

namespace App\Http\Controllers;
use App\Models\KategoriBuku;
use App\Models\Buku;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $KategoriBuku= KategoriBuku::Get();
        

        return view('admin.dashboard', compact('KategoriBuku'));
    }
<<<<<<< HEAD
    
    public function tampil(){
        $KategoriBuku= KategoriBuku::Get();
        
=======

    public function tampil()
    {
        $KategoriBuku = KategoriBuku::Get();

>>>>>>> ef1dbee42a567c246da1b7a9b60f56327596bee6

        return view('dashboard', compact('KategoriBuku'));
    }
   
   
}
