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
    <h1 style="text-align: center">data penjualan</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">produkID</th>
        <th scope="col">namaproduk</th>
        <th scope="col">harga</th>
        <th scope="col">stok</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($penjualan as $penjualan)
      <tr>
      <td>{{$penjualan->produkID}}</td>
      <td>{{$penjualan->namaproduk}}</td>
      <td>{{$penjualan->harga}}</td>
      <td>{{$penjualan->stok}}</td>
      <td>
        <a href="hapus/{{$penjualan->produkID}}"><button type="button" class="btn btn-danger">hapus</button></a>
        <a href="update/{{$penjualan->id}}"><button type="button" class="btn btn-danger">update</button></a>
      </td>
          </tr>

        
        @endforeach
    </tbody>
  </table>
 
</div>
</div>

</body>
</html>
