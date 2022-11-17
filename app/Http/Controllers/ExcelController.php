<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\ExcelsImport;
class ExcelController extends Controller
{
    function getform(){
        return view('excel.getform');
    }
    function import(Request $request){
        if($request->file('file')){
            $import =  Excel::import(new ExcelsImport, request()->file('file'));
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
}


