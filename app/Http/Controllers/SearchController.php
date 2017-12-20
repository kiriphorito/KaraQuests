<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class SearchController extends Controller
{
    public function index(){
        return view('pages.request_song');
    }
 
    public function search(Request $request){
        if($request->ajax()){
            $output="";
            $foundSongs=DB::table('songs')->where('song_name','LIKE','%'.$request->search."%")
                                            ->get();
    
            if($foundSongs){
                foreach ($foundSongs as $key => $foundSong) {
                    $output.='<tr>'.
                    '<td>'.$foundSong->id.'</td>'.  
                    '<td>'.$foundSong->song_name.'</td>'.
                    '<td>'.$foundSong->artist.'</td>'.
                    '<td>'.$foundSong->origin.'</td>'.
                    '<td><a class="btn btn-primary" href="/requests/precreate/'.$foundSong->id.'" role="button">Add</a></td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
}