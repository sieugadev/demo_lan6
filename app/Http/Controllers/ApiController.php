<?php

namespace App\Http\Controllers;
use App\Models\Nhanvien;
use App\Models\Hopdong;
use App\Models\Baohiem;
use Illuminate\Http\Request;
use DB;
class ApiController extends Controller
{
    //
<<<<<<< HEAD
    public function nhanvien()
=======
    public function index()
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
    {
        
        $nhanvien = DB::table('nhanvien')->get();
           
<<<<<<< HEAD
         if($nhanvien)
          {
            return response()->json([
             'data'=>$nhanvien,
              'status'=>200,
              'message'=>'ok'

            ]);
          }
           return response()->json([
            'data'=>null,
            'status'=>404,
            'message'=>'Data Not Found'
           ]);
}

public function hopdong()
{
    
    $hopdong = DB::table('hopdong')->get();
       
     if($hopdong)
      {
        return response()->json([
         'data'=>$hopdong,
          'status'=>200,
          'message'=>'ok'

        ]);
      }
       return response()->json([
        'data'=>null,
        'status'=>404,
        'message'=>'Data Not Found'
       ]);
}
public function baohiem()
{
    
    $baohiem = DB::table('baohiem')->get();
       
     if($baohiem)
      {
        return response()->json([
         'data'=>$baohiem,
          'status'=>200,
          'message'=>'ok'

        ]);
      }
       return response()->json([
        'data'=>null,
        'status'=>404,
        'message'=>'Data Not Found'
       ]);
}
=======
        return $nhanvien;
    }
    public function store(Request $request)
     {
       $nhanvien= DB::table('nhanvien')->insert(
        [
            'ma_nv'=>$request->ma_nv,
            'hoten_nv'=>$request->hoten_nv,
            'diachi_nv'=>$request->diachi_nv,
            'gioitinh_nv'=>$request->gioitinh_nv,
            'sdt_nv'=>$request->sdt_nv,
            'ma_cv'=>$request->ma_cv,
            'ma_pb'=>$request->ma_pb,
        ]);
        return response()->json(
        [
          'data'=>$nhanvien,
                 'status'=>200,
                 'message'=>'ok'
        ]);
      }
      public function update()
       {
        $nhanvien =DB::table('nhanvien')->update(
          [
            'ma_nv'=>$request->ma_nv,
            'hoten_nv'=>$request->hoten_nv,
            'diachi_nv'=>$request->diachi_nv,
            'gioitinh_nv'=>$request->gioitinh_nv,
            'sdt_nv'=>$request->sdt_nv,
            'ma_cv'=>$request->ma_cv,
            'ma_pb'=>$request->ma_pb, 
          ]);
       }

// public function hopdong()
// {
    
//     $hopdong = DB::table('hopdong')->get();
       
//      if($hopdong)
//       {
//         return response()->json([
//          'data'=>$hopdong,
//           'status'=>200,
//           'message'=>'ok'

//         ]);
//       }
//        return response()->json([
//         'data'=>null,
//         'status'=>404,
//         'message'=>'Data Not Found'
//        ]);
// }
// public function baohiem()
// {
    
//     $baohiem = DB::table('baohiem')->get();
       
//      if($baohiem)
//       {
//         return response()->json([
//          'data'=>$baohiem,
//           'status'=>200,
//           'message'=>'ok'

//         ]);
//       }
//        return response()->json([
//         'data'=>null,
//         'status'=>404,
//         'message'=>'Data Not Found'
//        ]);
// }
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
}
