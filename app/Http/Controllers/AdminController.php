<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
=======

use Illuminate\Http\Request;
use App\Models\User;
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
use Auth;
class AdminController extends Controller
{
    public function dangnhap()
<<<<<<< HEAD
    {
        return view('admin.dangnhap');
    }
    public function dangky()
    {
        return view('admin.dangky');
    }
    public function xulydangnhap(Request $request)
     
    {
      $username=$request->input('username');
      $password=$request->input('pass');
      if(Auth::attempt([
           'name'=>$username,
            'password'=>$password,
      ]))
      {
     $user=  User::where('name',$username)->first();
       Auth::login($user);
      
       return redirect()->route('nhanvien');
       
      }
      return redirect()->route('dangnhap')->with('thongbao','Bạn không có quyền truy cập');
      
    }
    public function thoat()
    {
      Auth::logout();
      return redirect()->route('dangnhap');
    }
=======
      {
        return view('admin.dangnhap');
      }
      public function dangky()
      {
        return view('admin.dangky');
      }
    public function xulydangky(Request $request)
     {
       $user=new User;
       $user->name=$request->username;
       $user->email=$request->email;
       $user->password=bcrypt($request->pass);
       $user->permision='1';
       $user->avatar='sieuga.jpg';
       $user->save();
       //dd($user);
       return redirect()->route('dangnhap')->with('thongbao',"Đã đăng ký thành công!!!");
     }
     public function xulydangnhap(Request $request)
      {
        $username=$request->username;
        if(Auth::attempt(
            [
                'name'=>$request->username,
                'password'=>$request->pass,
                
            ]))
            {
                $user= User::where('name',$username)->first();
                $per=$user->permision;
               // dd($per);
                Auth::login($user); 
                if($per==1) 
                {              
                    return redirect()->route('nhanvien')->with('thongbao','Đăng nhập thành công!!!'); 
                } 
                else
                {
                    return redirect()->route('hopdong')->with('thongbao','Đăng nhập thành công!!!'); 
                }              
            }
                return redirect()->route('dangnhap')->with('thongbao','Tài khoản và mật khẩu chưa đúng!!!');

     
            }
        public function thoat()
           {
             Auth::logout();
             return redirect()->route('dangnhap')->with('thongbao','Bạn đã đăng xuất thành công!!!');

           }    
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a

}
