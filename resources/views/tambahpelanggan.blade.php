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
<h3 style="text:align:center; margin-left:580px">{{$tambahpelanggan}}</h3>
        <form action="{{ url('login')}}" method="POST" enctype="multipart/form-data">
        <div class="container">
            @method("POST")
            @csrf
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                  </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1">
                  </div>

                  
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">no telp</label>
                    <input type="text" name="no telp" class="form-control" id="exampleFormControlInput1">
                  </div>
                   <br>
                   <input class="btn btn-primary" type="submit" value="DAFTAR">
                </div>
                <div class="col">
                  
                </div>
              </div>
            </div>
       
   </body>
</html>