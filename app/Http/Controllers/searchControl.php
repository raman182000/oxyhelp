<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class searchControl extends Controller
{
    public function search()
    {
        $search_text = $_GET['search'];
        $type = $_GET['type'];
        if ($type == 'Oxygen') {
            $data = DB::table('oxygen_clean')->where('city', 'LIKE', '%' . $search_text . '%')->get();
        }
        if ($type == 'Food') {
            $data = DB::table('food_clean')->where('city', 'LIKE', '%' . $search_text . '%')->get();
        }
        if ($type == 'Ambulance') {
            $data = DB::table('oxygen_clean')->where('city', 'LIKE', '%' . $search_text . '%')->get();
        }
        if ($type == 'Hospital') {
            $data = DB::table('hospital_clean')->where('city', 'LIKE', '%' . $search_text . '%')->get();
        }

        //return redirect('/results')->with('data');
        return view('search.index', compact('data'));
    }

    public function vote($id)
    {
        echo ('<pre>');
        print_r($id);
    }
}
