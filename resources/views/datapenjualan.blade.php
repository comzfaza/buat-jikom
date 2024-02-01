<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>Data penjualan</title>
</head>
<body>
@include('layout.navbar')
<div class="penjualan">
<div class="container">
    <br>
    <br>
  <center><h1>penjualan</h1></center>

  <br>
  <br>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Namapelanggan</th>
        <th scope="col">Totalharga</th>
        <th scope="col">-</th>
      </tr>
    </thead>
    <tbody>
      @foreach($penjualan as $penjualan)
      <tr>
      <td>{{$penjualan->Tanggalpenjualan}}</td>
      <td>{{$penjualan->Namapelanggan}}</td>
      <td>{{$penjualan->Totalharga}}</td>
      <td>
        <a href="detail/{{$penjualan->penjualanID}}"> <button type="button" class="btn
             btn-success">Detail</button></a>
      </td>
    </tr>

        
        @endforeach
    </tbody>
  </table>
 
</div>
</div>

</body>
</html>
