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
    <h3 style="text-algin:center; margin-left:650px">{{$register}}</h3>
        <form action="loginmasyarakat" method="POST" enctype="multipart/form-data">
        <div class="container">
            @method("POST")
            @csrf
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nik</label>
                    <input type="text" name="nik" class="form-control"id="exampleFormControlInput1">
                  </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">nama</label>
                    <input type="text" name="nama" class="form-control"id="exampleFormControlInput1">
                  </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1">
                  </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">password</label>
                    <input type="text" name="password" class="form-control" id="exampleFormControlInput1">
                  </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">tlp</label>
                    <input type="text" name ="tlp" class="form-control" id="exampleFormControlInput1">
                  </div>
           
                   <br>
                   <input class="btn btn-primary" type="submit" value="DAFTAR">
                </div>
                <div class="col">
                  
                </div>
              </div>
            </div>
      
      </form>
   </body>
</html>