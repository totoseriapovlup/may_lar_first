<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('task.index') }}">Tasks</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>