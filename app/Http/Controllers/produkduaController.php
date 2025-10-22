<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class produkduaController extends Controller
{
    public function index(){
        $produkdua = ["Baju","Celana","Topi","Sepatu"];
        return view('produkdua', compact('produkdua'));
}
}
