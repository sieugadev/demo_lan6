<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Imports\ExcelsImport;
class ExcelController extends Controller
{
    function getform(){
        return view('excel.getform');
    }
    function import(Request $request){
        if($request->file('file')){
            $import =  Excel::import(new ExcelsImport, request()->file('file'));
=======
use App\Imports\UsersImport;
//use Maatwebsite\Excel\Concerns\WithStartRow;
class ExcelController extends Controller
{
     public function import_excel(){
        return view('excel.import_excel');
    }
   public function import(Request $request){
        if($request->file('file')){
            $import =  Excel::import(new UsersImport, request()->file('file'));
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
            $msg_success = "Data Uploaded Succesfully! ";
            $msg_danger = "Data Uploaded failed! ";
            if ($import) {
                return redirect('/')->with('success', strtoupper($msg_success));
            }else{
               return redirect('/')->with('danger', strtoupper($msg_danger));
            }
        }
        else{
            $msge = "please choose your file! ";
            return redirect('/')->with('choose_file', strtoupper($msge));
        }
    }
<<<<<<< HEAD
}


=======


}
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
