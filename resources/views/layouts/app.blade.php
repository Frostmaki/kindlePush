<!DOCTYPE html>
<html>
    <head>
        <title>{{config('APP_NAME')}}</title>
        <link rel="stylesheet" href="http://kindlePush.test/public/css/app.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        @include('layouts._header')
        <div id="app-container">
            @include('layouts._message')
            @yield('content')
            @include('layouts._footer')
        </div>
    </body>
</html>