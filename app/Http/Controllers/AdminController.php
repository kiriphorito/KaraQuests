<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $firstrequest = DB::table('request_songs')
                            ->select('request_songs.id', 'request_songs.requester', 'request_songs.created_at','songs.song_name', 'artist','origin')
                            ->join('songs','request_songs.song_id','=','songs.id')
                            ->first();
        return view('requests.admin')->with('firstrequest', $firstrequest);
    }

    public function clearfirst()
    {
        $firstrequest = DB::table('request_songs')
                        ->orderBy('id', 'asc')
                        ->limit(1)
                        ->delete();
        return redirect('/admin');
    }

    public function clearrequests()
    {
        DB::table('request_songs')->truncate();
        return redirect('/admin')->with('success','All requests have been removed');;
    }
}
