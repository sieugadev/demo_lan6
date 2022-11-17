<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
   
        <script src="js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
    
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
   
<section  style=""><!--section có thể chọn được màu-->
  <div class="container">
    
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
<div class="card-body">

<form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
            @if(Session::has('thongbao'))
                      <div class="alert alert-danger">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                    <div class="col">
                        <label>Tên Người Dùng</label>
                        <input id="current-pass-control" name="name" class="form-control" type="text" value="{!! old('txtMa') !!}">
                           
                    </div>
                    <br>   
                    <div class="col">
                        <label>Email</label>
                        <input id="new-pass-control" name="email" class="form-control" type="text" value="{!! old('txtTen') !!}">
                               
                    </div>
                   <div class="col">
                        <label>Mật Khẩu</label>
                        <input id="new-pass-control" name="password" class="form-control" type="password" value="{!! old('txtTen') !!}">
                               
                    </div>
                    <div class="col">
                        <label>Level</label>
                        <input id="new-pass-control" name="level" class="form-control" type="text" value="{!! old('txtTen') !!}">
                               
                    </div>
                    <br>   
                    
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
</form>
</div>
</body>
</html>