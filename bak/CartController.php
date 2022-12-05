<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Imports\Cart;
use App\Models\Product;
class CartController extends Controller
{
    public function show()
    {
       $data=DB::table('product')->get();
       //dd($data);
       return view('show.show',compact('data'));
    }
    public function giohang(Request $request,$id)
     {
        $data=DB::table('product')->where('id',$id)->first();
        
        if($data)
         {
              
              $oldcart= Session('cart',$data) ? Session('cart',$data) :null;
              
                 
                //dd($oldcart);
                  $newcart=new Cart($oldcart);
                  $newcart->Addcart($data,$id);
                  $request->session()->put('cart',$newcart);

         }
      dd($newcart);
       return view('show.giohang',compact('data'));
     }
}
