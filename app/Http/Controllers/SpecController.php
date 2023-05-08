<?php

namespace App\Http\Controllers;
use App\Models\Spec;
use App\Models\Department;
use App\Models\perm;

use Illuminate\Http\Request;

class SpecController extends Controller
{
    public function Dept(){
        $get = Spec::get();
        $dept = Department::get();
        return view("Hms.Dept",["get"=> $get, "dept"=> $dept]);

    }
    function Store2(){
        $input = request()->validate([
            "spe" => "required",
        ]);
        Spec::create($input);
        return back();
    }

    public function Roles(){
        $perr = perm:: get();
        return view("Hms.Roles", ["perr"=>$perr]);
    }
    function per_p(){
        $input = request()->validate([
            "per" => "required"
        ]);
        perm::create($input);
        return back();
    }

    public function Inventory(){
        return view("Pdata.Inventory");
    }
}
