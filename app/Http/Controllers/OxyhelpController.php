<?php

namespace App\Http\Controllers;

use DB;
use App\Models\oxyhelp;
use Illuminate\Http\Request;

class OxyhelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\oxyhelp  $oxyhelp
     * @return \Illuminate\Http\Response
     */
    public function show(oxyhelp $oxyhelp)
    {

        $search_text = $_GET['search'];
        $type = $_GET['type'];
        if ($type == 'Oxygen') {
            $data = DB::table('oxygen_clean')->where('city', 'LIKE', '%' . $search_text . '%')->where('verification_status', 1)->get();
        }
        if ($type == 'Food') {
            $data = DB::table('food_clean')->where('city', 'LIKE', '%' . $search_text . '%')->where('verification_status', 1)->get();
        }
        if ($type == 'Ambulance') {
            $data = DB::table('oxygen_clean')->where('city', 'LIKE', '%' . $search_text . '%')->where('verification_status', 1)->get();
        }
        if ($type == 'Hospital') {
            $data = DB::table('hospital_clean')->where('city', 'LIKE', '%' . $search_text . '%')->where('verification_status', 1)->get();
        }

        //return redirect('/results')->with('data');
        return view('search.index', compact('data', 'type', 'search_text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\oxyhelp  $oxyhelp
     * @return \Illuminate\Http\Response
     */
    public function edit(oxyhelp $oxyhelp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\oxyhelp  $oxyhelp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oxyhelp $oxyhelp)
    {
        echo ('<pre>');
        print_r("heloo");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\oxyhelp  $oxyhelp
     * @return \Illuminate\Http\Response
     */
    public function destroy(oxyhelp $oxyhelp, $vote, $id, $type)
    {
        $date = date('Y-m-d H:i:s');
        if ($type == 'Oxygen') {
            if ($vote == 'upvote') {
                $upvote = DB::table('oxygen_clean')->where('Id', $id)->value('upvote');
                DB::table('oxygen_clean')->where('Id', $id)->update(['upvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 1]);
            } else {
                $upvote = DB::table('oxygen_clean')->where('Id', $id)->value('downvote');
                DB::table('oxygen_clean')->where('Id', $id)->update(['downvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 0]);
            }
        }
        if ($type == 'Food') {
            if ($vote == 'upvote') {
                $upvote = DB::table('food_clean')->where('Id', $id)->value('upvote');
                DB::table('food_clean')->where('Id', $id)->update(['upvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 1]);
            } else {
                $upvote = DB::table('food_clean')->where('Id', $id)->value('downvote');
                DB::table('food_clean')->where('Id', $id)->update(['downvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 0]);
            }
        }
        if ($type == 'Ambulance') {

            if ($vote == 'upvote') {
                $upvote = DB::table('oxygen_clean')->where('Id', $id)->value('upvote');
                DB::table('oxygen_clean')->where('Id', $id)->update(['upvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 1]);
            } else {
                $upvote = DB::table('oxygen_clean')->where('Id', $id)->value('downvote');
                DB::table('oxygen_clean')->where('Id', $id)->update(['downvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 0]);
            }
        }
        if ($type == 'Hospital') {
            if ($vote == 'upvote') {
                $upvote = DB::table('hospital_clean')->where('Id', $id)->value('upvote');
                DB::table('hospital_clean')->where('Id', $id)->update(['upvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 1]);
            } else {
                $upvote = DB::table('hospital_clean')->where('Id', $id)->value('downvote');
                DB::table('hospital_clean')->where('Id', $id)->update(['downvote' => $upvote + 1, 'last_verified_on' => $date, 'verification_status' => 0]);
            }
        }
        return redirect()->back();
    }
}
