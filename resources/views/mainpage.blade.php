<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Homework</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="nav-bar">
            @include('layouts.app')
        </div>
        
            <div class="container result" style="margin-bottom: 2vh">
                @yield('result')
            </div>
            <div class="blog">
                @yield('blog')
            </div>
    </body>
</html>