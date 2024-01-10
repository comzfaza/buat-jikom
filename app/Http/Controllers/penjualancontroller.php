<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualancontroller extends Controller
{
    function data(){
        $penjualan = "data penjualan";
  
        $data = penjualan::all();
  
        return view('penjualan',['data penjualan' => $penjualan, 'penjualan' => $data]);
      }
}
