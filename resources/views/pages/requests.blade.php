@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Requester</th>
        <th scope="col">Song Name</th>
        <th scope="col">Artist</th>
        <th scope="col">Origin</th>
        <th scope="col">Requested At</th>
        </tr>
    </thead>
    <tbody>
        @if(count($requests) != 0)
            @foreach($requests as $request)
                <tr>
                    <th scope="row">{{$request->id}}</th>
                    <th scope="row">{{$request->requester}}</th>
                    <th scope="row">{{$request->song_name}}</th>
                    <th scope="row">{{$request->artist}}</th>
                    <th scope="row">{{$request->origin}}</th>
                    <th scope="row">{{$request->created_at}}</th>
                </tr>
            @endforeach
        @endif
    </tbody>
    </table>
</div>
@endsection

