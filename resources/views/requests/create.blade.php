@extends('layouts.app')
@section('content')
    <h1>Request</h1>
    {!! Form::open(['action' => 'RequestsController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('song_id', 'Song ID')}}
        {{Form::text('song_id', '',['class' => 'form-control', 'placeholder' => 'Song ID'])}}
        {{Form::label('requester', 'Requester')}}
        {{Form::text('requester', '',['class' => 'form-control', 'placeholder' => 'Requester'])}}
    </div>
    {{Form::submit('Sumbit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection