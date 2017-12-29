<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use DB;

class ImportsController extends Controller
{
    public function csv_upload()
    {
        return view('pages.import');
    }

    public function csv_add(Request $request){
        $upload=$request->file('file');
        $filePath=$upload->getRealPath();
        // Open
        $file=fopen($filePath, 'r');

        $header= fgetcsv($file);
        
        if (($handle = fopen ( $filePath, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $csv_data = new Song ();
                $csv_data->song_name = $data [0];
                $csv_data->artist = $data [1];
                $csv_data->origin = $data [2];
                $csv_data->save ();
            }
            fclose ( $handle );
        }

        return redirect('/request')->with('success','CSV has been added');
    }
}
