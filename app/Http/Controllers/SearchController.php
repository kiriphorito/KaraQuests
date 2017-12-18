<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('pages.request_song');
    }

    public function search(Reqeust $request){
        if ($request -> ajax()){
            $output="";
 
            $products=DB::table('products')->where('title','LIKE','%'.$request->search."%")->get();
 
            if($products){
                foreach ($products as $key => $product) {
                    $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->title.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
 
}
