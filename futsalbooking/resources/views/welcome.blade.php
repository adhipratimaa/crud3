<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>FRONTEND</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">

             <router-link to="/login" class="nav-link">
                <i class="nav-icon fas fa-heartbeat"></i>
                <p> Login</p>
            </router-link>
            <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-heartbeat"></i>
                <p> Dashboard</p>
            </router-link>

            <router-view>
                
            </router-view>
        </div>
    <script src="{{url('js/app.js')}}"></script>
    </body>
</html>
