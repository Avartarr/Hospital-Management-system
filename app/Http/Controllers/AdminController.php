<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Spec;
use App\Models\Dash;
use App\Models\roll;
use App\Models\perm;
use App\Models\Pharmacy;
use App\Models\Patient;


use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Dashboard(){
        $get = Dash:: get();
        $dpt = Department:: get();
        $spc = Spec::get();
        return view("Hms.Dashboard", ["get"=> $get, "dpt"=>$dpt, "spc"=>$spc]);
    }
    function Emp(){
        $input = request()->validate([
            "name" =>"required",
            "dob"=> "required",
            "gen"=> "required",
            "phone"=> "required",
            "email"=> "required",
            "add"=> "required",
            "dep"=> "required",
            "spe"=> "required",

        ]);

        Dash::create($input);
        return back();
    }

    public function Dept(){
        $get = Department:: get();
        return view("Hms.Dept", ["get"=> $get]);
    }
    function Store(){
        $input = request()->validate([
            "dept" => "required",
        ]);
        Department::create($input);
        return back();
    }

    public function Roles(){
        $get = roll:: get();
        $perr = perm:: get();
        return view("Hms.Roles", ["get"=> $get, "perr"=>$perr]);
    }
    function role_p(){
        $input = request()->validate([
            "role" => "required"
        ]);
        roll::create($input);
        return back();
    }



    public function Patient(){
        $get = Patient:: get();
        return view("Pdata.Patient",["get" => $get]);
    }
    function Patient_D(){
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
            "pre" => "required",
            "tem" => "required",
            "wei" => "required",
            "res" => "required",
            "hea" => "required",
            "pul" => "required",
            "name2" => "required",
            "phone2" => "required",
            "rel" => "required",
        ]);
        $input["uid"]=rand(111111,000000);
        Patient::create($input);
        return back();
    }

    public function Pharm(){
        $get = Pharmacy:: get();
        return view("Pdata.Pharm",["get"=> $get]);
    }
    function Pharm_p(){
        $input = request()->validate([
            "name" => "required",
            "qty"  => "required",
        ]);
        Pharmacy::create($input);
        return back();
    }
}
