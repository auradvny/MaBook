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
    
    public function tampil(){
        $KategoriBuku= KategoriBuku::Get();
        

        return view('dashboard', compact('KategoriBuku'));
    }
   
   
}
