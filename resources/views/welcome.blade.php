<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

        <!-- Styles -->
        <style>
        body{
            background-color: #ddd;
             
        }
        .container{
            width: 500px;
        }
        
        </style>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">News</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link " href="/create">Create <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link " href="/show">show <span class="sr-only">(current)</span></a>
                
                </div>
            </div>
        </nav>

        <br>

        <div class="container">
            @yield('content')
        </div>

        <script src="{{ URL::asset('js/bootstrapp.js') }}"></script>
            <script src="{{ URL::asset('js/bootstrapp.min.js') }}"></script>
    </body>
</html>
