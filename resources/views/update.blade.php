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

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">stok</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_laporan" rows="3"></textarea>
    </div>
    <input class="btn btn-primary" type="submit"  value= "update" >
    </form>
@endsection
</body>
</html>