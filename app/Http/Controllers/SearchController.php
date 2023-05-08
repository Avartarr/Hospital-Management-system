<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $search_text  = $_GET['query'];
    $results = Search::where('name', 'LIKE', '%' . $search_text . '%')->get();

    return view('"Pdata.Patient"', ['results' => $results]);
}

// public function search(Request $request)
// {
//     $searchTerm = $request->input('searchTerm');
//     $patient = DB::table('patients')
//                 ->where('name', 'LIKE', '%'.$searchTerm.'%')
//                 ->orWhere('uid', 'LIKE', '%'.$searchTerm.'%')
//                 ->paginate(10);

//     return view('patients.Patient', compact('patients'));
// }

}
