<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class halamanController extends Controller
{
    function barang(){
      return view('homdata');
    }
    function tambah(){
      $tambahproduk = 'Tambah Produk';

      return view('tambahproduk', ['tambahproduk' => $tambahproduk]);
  }
  function perbaruhi(){
    $updatepro = 'Update Produk';

    return view('updatepro', ['updatepro' => $updatepro]);
}

    
}
