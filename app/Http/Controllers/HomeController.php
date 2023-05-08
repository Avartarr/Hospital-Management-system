<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $get = Admin:: get();
        return view('home', ['get'=> $get]);
    }
    function Data(){
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

        Admin::create($input);
        return back();
    }
}
