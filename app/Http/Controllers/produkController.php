<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    function barang(){
      $produk = "data produk";

      $data = produk::all();

      return view('homdata',['data produk' => $produk, 'produk' => $data]);
    }

    function tambah(){

      return view('tambahproduk');
  }

  function perbaruhi(){
    $updatepro = 'Update Produk';

    return view('updatepro', ['updatepro' => $updatepro]);
  }

  function delete($id){
    $produk = DB :: table('produk')->where('produkID', '=',$id)->delete();

    return redirect()->back();
  }
  
  function edit($id, Request $request){
    $stok = $request->stok;
    $harga = $request->harga;
    $nama = $request->namaproduk;
    DB::table('produk')->where('produkID', $id)
    ->update([
      'stok' => $stok,
      'harga' => $harga,
      'namaproduk' =>$nama,
    ]);
    return redirect("/homdata");
  }

  function update($id)
  {
    $produk = DB::table('produk')
    ->where('produkID','=',$id)
    ->first();
    return view('updatepro',['produk'=> $produk]);
  }
    
  function perbarui(Request $request, $id){
    $stok = $request->stok;
    $harga = $request->harga;
    $nama = $request->namaproduk;
    DB::table('produk')->where('produkID', $id)
    ->update([
      'stok' => $stok,
      'harga' => $harga,
      'namaproduk' =>$nama,
    ]);
    return redirect("/produk");
  }
  function tambahproduk(request $request){
    

    $produk = $request->namaproduk;
    $harga = $request->harga;
    $stok = $request->stok;

    DB::table('produk')->insert([
      'namaproduk'=> $produk,
      'harga'=> $harga,
      'stok'=> $stok
    ]);
    return redirect('homdata');
  }

    
}
