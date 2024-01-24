<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="login.css"> 
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   </head>
   <body>
      @include('layout.navbar')
    <br>
    <br>
   
    <br>
 <div class="container text-center">
              <div class="row">
                <div class="col">
                  <h3 style="text:align:center; margin-left:610px">PENJUALAN</h3>
        <form action="{{url("/penjualan")}}" method="POST" enctype="multipart/form-data">
        <div class="container">
            @method("POST")
            @csrf
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  
                </div>
                <center>
                <div>
                <input type="hidden" name="idPenjualan" value="{{$idPenjualan}}"/>
                <select class="form-select w-50" aria-label="Default select example" name="produk">
                  <option selected>pilih produk</option>
                  @foreach($produk as $produk)
                  <option value={{$produk -> produkID}}>{{$produk -> namaproduk}}</option>
                  @endforeach
                </select>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="text-align: center">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control w-50" id="exampleFormControlInput1">
                  </div>

                  
                  <select class="form-select w-50" aria-label="Default select example" name="pelanggan">
                    <option selected>enter your name</option>
                    @foreach($pelanggan as $pelanggan)
                    <option value={{$pelanggan -> pelangganID}}>{{$pelanggan -> Namapelanggan}}</option>
                    @endforeach
                  </select>
                   <br>
                   <input class="btn btn-primary w-50" type="submit" value="DAFTAR">
                  </div>
                </div>
              </center>
                <div class="col">
                  
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Qty</th>
                      <th scope="col">subtotal</th>
                    </tr>
                  </thead>

                  <?php $total_harga = 0 ?>
                  @foreach($detailPenjualan as $detailPenjualan)
                  <tbody>
                    <tr>
                    <td>{{$detailPenjualan->namaproduk}}</td>
                    <td>{{$detailPenjualan->harga}}</td>
                    <td>{{$detailPenjualan->jumlahproduk}}</td>
                    <td>{{$detailPenjualan->subtotal}}</td>
                    <?php $total_harga = $total_harga + $detailPenjualan->subtotal ?>
                        
              
                        <a href="hapusstok/{{$produk->produkID}}"><button type="button" class="btn btn danger"
                          >hapus</button></a>
                      </tr>
                      @endforeach
                  </tbody>
                </table>

              </div>
            </div>
           
                </div>
                <div class="col">
                  
                </div>
              </div>
            <div class="card mt-3">
              <div class="card body"></div>
              <h1>Total Harga : {{number_format($total_harga,0,',','.')}}</h1>
            </div>

   </body>
</html>