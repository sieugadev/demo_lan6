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
<<<<<<< HEAD
    <body>
   
<section  style=""><!--section có thể chọn được màu-->
  <div class="container">
=======
    <body class="bg-info">
    <form method="POST" action="{{URL ::route('xulydangky')}}">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<section  style=""><!--section có thể chọn được màu-->
  <div class="container" style="margin:150px;">
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
    
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
<<<<<<< HEAD
<div class="card-body">

<form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
=======
          <div class="card-body p-5 text-center">
         
        
            <h3 class="mb-5">ĐĂNG KÝ</h3>
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
            @if(Session::has('thongbao'))
                      <div class="alert alert-danger">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
<<<<<<< HEAD
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
=======
            <div class="form-row ">
                    <div class="col-md-4">
                               <label class="form-label " for="typeEmailX-2"><h5>Tài Khoản</h5></label>
                    </div>
                    <div class="col-md-8">
                                <input type="text" name="username"  class="form-control form-control-lg" />
              
                     </div>
                  </div>
                     <br>
                  <div class="form-row ">
                      <div class="col-md-4 content-left">
                               <label class="form-label" for="typePasswordX-2"><h5>Email</h5></label>
                     </div> 
                     <div class="col-md-8">
                              <input type="text" name="email" class="form-control form-control-lg" />
                       </div>
                 </div>
                 <br>
                  <div class="form-row ">
                      <div class="col-md-4">
                               <label class="form-label" for="typePasswordX-2"><h5>Mật Khẩu</h5></label>
                     </div> 
                     <div class="col-md-8">
                              <input type="password" name="pass" class="form-control form-control-lg" />
                       </div>
                 </div>


  <br>
            <!-- Checkbox
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Nhớ mật khẩu</label>
            </div>
     <br>
      -->
            
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Xác Nhận</button>
            <a href="{!! URL::route('dangnhap')!!}" class="btn btn-danger btn-lg btn-block"><i class="icon-remove"></i>&nbsp&nbspQuay Lại&nbsp&nbsp</a>
       <!-- 
        <input type="submit" name="submit" value="Đang Nhập"/>

        <button class="btn btn-primary btn-lg btn-block" type="submit" name="OK">Xác Nhận</button>
            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Đăng nhập với Google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Đăng nhập với Facebook</button>
              --->


          </div>
        </div>
      </div>
    </div>


  </div>
</section>
</form >
</body>
</html>
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
