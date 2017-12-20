<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request_song;
use App\Song;
use DB;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = DB::table('request_songs')
                        ->select('request_songs.id', 'request_songs.requester', 'request_songs.created_at','songs.song_name', 'artist','origin')
                        ->join('songs','request_songs.song_id','=','songs.id')
                        ->get();
        return view('pages.requests')->with('requests', $requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requests.create');
    }

    public function precreate($id)
    {
        // $chosenSong = DB::table('songs')
        //                     ->select('songs.*')
        //                     ->where('songs.id','=',$id)
        //                     ->get();
        $chosenSong = Song::find($id);
        // $chosenSong = $chosenSong->toArray();
        return view('requests.precreate')->with('chosenSong',$chosenSong);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'song_id' => 'required',
            'requester' => 'required'
        ]);

        $newrequest = new Request_song;
        $newrequest->song_id = $request->input('song_id');
        $newrequest->requester = $request->input('requester');
        $newrequest->save();

        return redirect('/requests')->with('success','Your request has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
