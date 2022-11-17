<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function dangnhap()
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

}
