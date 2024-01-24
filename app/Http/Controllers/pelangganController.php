<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{
    function nama(){
        $pelanggan = "data pelanggan";
  
        $data = pelanggan::all();
  
        return view('datalanggan',['data pelanggan' => $pelanggan, 'pelanggan' => $data]);
      }
    function plus(){

        return view('tambahpelanggan');
      }  
    function new(){
        $updatepelanggan = 'update pelanggan';
  
        return view('updatepelanggan', ['update pelanggan' => $updatepelanggan]);
      }  
    function hapus($id){
        $pelanggan = DB :: table('pelanggan')->where('pelangganID', '=',$id)->delete();
    
        return redirect()->back();
      }

      function edit($id){
    
        $pelanggan = DB::table('pelanggan')
            ->where('pelangganID', '=' , $id)
            ->first();
            return view('updatepelanggan', ['pelanggan' => $pelanggan]);
    
      }

  function update($id)
  {
    $pelanggan = DB::table('pelanggan')
    ->where('pelangganID','=',$id)
    ->first();
    return view('updatepelanggan',['pelanggan'=> $pelanggan]);
  }

  function updatepelanggan(Request $request, $id){
    $Namapelanggan = $request->Namapelanggan;
    $Alamat = $request->Alamat;
    $Nomortelepon = $request->Nomortelepon;
    DB::table('pelanggan')->where('pelangganID', $id)
    ->update([
      'Namapelanggan' => $Namapelanggan,
      'Alamat' => $Alamat,
      'Nomortelepon' =>$Nomortelepon,
    ]);
    return redirect("/datalanggan");

  }
    function menambah(request $request){
    
     Auth::user();

    $nama = $request->Namapelanggan;
    $alamat = $request->Alamat;
    $nomortelp = $request->Nomortelepon;

    DB::table('pelanggan')->insert([
      'namapelanggan'=> $nama,
      'Alamat'=> $alamat,
      'Nomortelepon'=> $nomortelp
    ]);
    return redirect('datalanggan');
  }

}
