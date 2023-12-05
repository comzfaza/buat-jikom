<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
</head>
<body>
@extends('layout.navbar')

@section('content')

    
    
    <form action="{{route('update',['id' => $data['id']])}}" method="POST" enctype="multipart/form-data">
        @method("put")
        @csrf
    <div class="container">
    <div class="mb-3">
    <label for="formFile" class="form-label">bukti foto</label>
    <input type="file" class="form-control" id="formFile" name="foto">
    </div>


    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">isi laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_laporan" rows="3"></textarea>
    </div>
    <input class="btn btn-primary" type="submit"  value= "kirim" >
    </form>
@endsection
</body>
</html>