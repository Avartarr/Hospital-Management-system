<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
class RegisterController extends Controller
{
    public function Reception(){
        return view("Reg.Reception");
    }

    function Reception2(){
        $input = request()->validate([
            // "uid" => "required",
            "name" => "required",
            "email" => "required",
            "age" => "required",
            "add" => "required",
            "gen" => "required",
            "phone" => "required",
            "bg" => "required",
            "reg" => "required",
            "name2" => "required",
            "phone2" => "required",
            "rel" => "required",
        ]);
        $input["uid"]=rand(111111,000000);
    Register:: create($input);
    return back();
    }

    public function Nurse(){
    return view("Reg.Nurse");
    }
}
