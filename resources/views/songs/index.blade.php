@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Song Name</th>
        <th scope="col">Artist</th>
        <th scope="col">Origin</th>
        </tr>
    </thead>
    <tbody>
        @if(count($songs) != 0)
            @foreach($songs as $song)
                <tr>
                    <th scope="row">{{$song->id}}</th>
                    <th scope="row">{{$song->song_name}}</th>
                    <th scope="row">{{$song->artist}}</th>
                    <th scope="row">{{$song->origin}}</th>
                </tr>
            @endforeach
        @endif
    </tbody>
    </table>
</div>
@endsection

