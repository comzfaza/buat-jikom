<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>Document</title>
</head>
<body>
  @include('layout.navbar')

<div class="ct">
<div class="container">
    <h1 style="text-align: center">data produk</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">penjualanID</th>
        <th scope="col">namaproduk</th>
        <th scope="col">harga</th>
        <th scope="col">stok</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produk as $produk)
      <tr>
      <td>{{$produk->produkID}}</td>
      <td>{{$produk->namaproduk}}</td>
      <td>{{$produk->harga}}</td>
      <td>{{$produk->stok}}</td>
      <td>
        <a href="hapus/{{$produk->produkID}}"><button type="button" class="btn btn-danger">hapus</button></a>
        <a href="update/{{$produk->produkID}}"><button type="button" class="btn btn-danger">update</button></a>
      </td>
          </tr>

        
        @endforeach
    </tbody>
  </table>
 
</div>
</div>

</body>
</html>
