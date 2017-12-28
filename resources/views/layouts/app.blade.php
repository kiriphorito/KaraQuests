<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <title>{{config('app.name','KaraQuests')}}</title>
        <meta name="_token" content="{{ csrf_token() }}">
        @yield('header')
    </head>
    <body>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>