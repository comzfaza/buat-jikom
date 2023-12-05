<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    function barang(){
      $produk = "data produk";

      $data = produk::all();

      return view('homdata',['data produk' => $produk, 'produk' => $data]);
    }
    function tambah(){
      $tambahproduk = 'Tambah Produk';

      return view('tambahproduk', ['tambahproduk' => $tambahproduk]);
  }
  function perbaruhi(){
    $updatepro = 'Update Produk';

    return view('updatepro', ['updatepro' => $updatepro]);
  }
  function delete($id){
    $produk = DB :: table('produk')->where('produkID', '=',$id)->delete();

    return redirect()->back();
  }
  function berubah($id){
    $id = (int) $id;

    $affected = DB::table('pengaduan')
        ->where('id', $id)
        ->update(['isi_laporan' => request()->isi_laporan]);

  return redirect('home');
}

    
}
