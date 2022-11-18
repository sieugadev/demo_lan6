<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Auth;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure; // phải dùng mới sử dụng được lớp Authenticate
use Auth;// phải dùng mới sử dụng được lớp Authenticate
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
<<<<<<< HEAD
    public function handle($request, Closure $next, ...$guards)
    
        
    { 
      
      if(Auth::check() &&(Auth::user()->level==1))
      {
        return $next($request);
      }
      return redirect()->route('dangnhap')->with('thongbao','Bạn không có quyền truy cập trang này');
    }
=======
    public function handle($request,Closure $next,...$guards)
     {
        if(Auth::check()&&(Auth::user()->permision==1))
          {
            return $next($request);
          }
          return redirect()->route('dangnhap')->with('thongbao','Bạn không có quyền truy cập vào trang này');
     }
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
}
