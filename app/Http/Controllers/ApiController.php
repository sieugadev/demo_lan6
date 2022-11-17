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
    public function nhanvien()
    {
        
        $nhanvien = DB::table('nhanvien')->get();
           
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
}
