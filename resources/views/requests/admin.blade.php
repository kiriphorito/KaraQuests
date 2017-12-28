@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <center>
        <p><b><h2>Next Song</h2></b></p>
        @if(count($firstrequest) != 0)
                <p><b><h3>{{$firstrequest->song_name}}</h3></b></p>
                <p><b><h4>{{$firstrequest->artist}}<b></h4></p>
                <p>{{$firstrequest->origin}}</p>
                <p>{{$firstrequest->requester}}</p>
                <p>{{$firstrequest->created_at}}</p>
        @else
            <p>There are no requests!</p>
        @endif
        <br>
        <a class="btn btn-primary" href="/admin/removefirst" role="button">Remove Top Request</a>
        <a class="btn btn-primary" href="/admin/removerequests" role="button">Remove All Requests</a>
        <a class="btn btn-primary" href="/csv_upload" role="button">Add Songs Via CSV</a>
        <a class="btn btn-primary" href="#" role="button">Remove All Songs</a>
    </center>
@endsection