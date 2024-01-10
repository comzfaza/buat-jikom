<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{
    function nama(){
        $pelanggan = "data pelanggan";
  
        $data = pelanggan::all();
  
        return view('datalanggan',['data pelanggan' => $pelanggan, 'pelanggan' => $data]);
      }
    function plus(){
        $tambahpelanggan = 'Tambah pelanggan';
  
        return view('tambahpelanggan', ['tambahpelanggan' => $tambahpelanggan]);
      }  
      function new(){
        $updatepelanggan = 'update pelanggan';
  
        return view('updatepelanggan', ['update pelanggan' => $updatepelanggan]);
      }  
}
