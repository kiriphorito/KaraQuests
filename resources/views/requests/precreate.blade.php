@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <h3>Request</h3>
    {!! Form::open(['action' => 'RequestsController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('song_id', 'Song ID')}}
        {{Form::text('song_id', $chosenSong->id,['class' => 'form-control', 'placeholder' => 'Song ID','readonly'])}}
        {{Form::label('song_name', 'Song Name')}}
        {{Form::text('song_name', $chosenSong->song_name,['class' => 'form-control', 'placeholder' => 'Song Name','readonly'])}}
        {{Form::label('requester', 'Requester')}}
        {{Form::text('requester', '',['class' => 'form-control', 'placeholder' => 'Requester'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection