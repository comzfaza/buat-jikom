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
  <h1 style="text-align: center">data pelanggan</h1>
  <table class="table table-bordered">
    <thead>

      <tr>
        <th scope="col">pelangganID</th>
        <th scope="col">Namapelanggan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomortelepon</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pelanggan as $pelanggan)
      <tr>
      <td>{{$pelanggan->pelangganID}}</td>
      <td>{{$pelanggan->Namapelanggan}}</td>
      <td>{{$pelanggan->Alamat}}</td>
      <td>{{$pelanggan->Nomortelepon}}</td>
      <td>
        <a href="hapuspelanggan/{{$pelanggan->pelangganID}}"><button type="button" class="btn btn-danger">hapus</button></a>
        <a href="updatepelanggan/{{$pelanggan->pelangganID}}"><button type="button" class="btn btn-danger">update</button></a>
      </td>
          </tr>

        
        @endforeach
    </tbody>
  </table>
 
</div>
</div>

</body>
</html>
