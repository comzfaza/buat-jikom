<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualancontroller extends Controller
{
    function data(){
      $produk = DB:: table("produk")->get();
      $pelanggan = DB:: table("pelanggan")->get();

      $penjualan = DB::table('penjualan')->latest()->first();
      
      $idPenjualan = "";

      if(!$penjualan){
        $idPenjualan = "1";

    }else{
      $idPenjualan = $penjualan->penjualanID;
      if($penjualan->status == "selesai"){
        $idPenjualan = $penjualan->penjualanID +1;
      }else{
        $idPenjualan = $penjualan->penjualanID;
      }
    }

    $detailPenjualan = DB::table('detailPenjualan')->where('penjualanID', $idPenjualan)
      ->join('produk','detailPenjualan.produkID','=', 'produk.produkID')
      ->get();
    // return $detailPenjualan;

      return view('penjualan', ['detailPenjualan' => $detailPenjualan,'idPenjualan' => 
      $idPenjualan, 'produk' => $produk, 'pelanggan' => $pelanggan]);
      }

    function store(Request $request){

      $produk = DB::table('produk')->where('produkID', $request->produk)->first();
      $Datapenjualan = DB::table('penjualan')->where('penjualanID',$request->idPenjualan)->first();

      if(!$Datapenjualan){ //kalau tidak ada data penjualan
      $penjualan = DB::table('penjualan')->insert([
        'penjualanID'=> $request->idPenjualan,
        'Tanggalpenjualan'=> date('Y-m-d'),
        'Totalharga'=>0,
        'pelangganID' =>$request->pelanggan,
        'status' => 'pending'

      ]);
    }
      $detailPenjualan = DB::table('detailPenjualan')->insert([
        'penjualanID' => $request->idPenjualan,
        'produkID' => $request->produk,
        'jumlahproduk' => $request->jumlah,
        'subtotal' => $request->jumlah * $produk->harga

      ]);
      return redirect()->back();
    }

    function checkout(Request $request){
      $updatedata = DB::table('penjualan')->where('penjualanID', $request->idPenjualan)->update([
        'status' => 'selesai',
        'Totalharga' => $request->Totalharga
      ]);

      if($updatedata){
        return redirect()->back()->with('info', 'penjualan telah berhasil');
      }
      return redirect()->back();
    }

    function datapenjualan(){
      $data = "Data Penjualan";

      $penjualan = DB::table('penjualan')->join('pelanggan','penjualan.pelangganID','=',
      'pelanggan.pelangganID')->get();

      return view('datapenjualan',['Data penjualan'=> $data, 'penjualan' => $penjualan]);
    }
    
}
