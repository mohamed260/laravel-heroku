<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title></title>
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
        <div class="container">
            @foreach ($posts['articles'] as $post)

                <ul class="list-group">
                    <li class="list-group-item active">{{ $post['title'] }}</li>
                    <li class="list-group-item">{{ $post['content'] }}</li>
                    <li class="list-group-item">{{ $post['source']['name'] }} {{ $post['publishedAt'] }}</li>
                </ul>
                <br>
                
            @endforeach


            <script src="{{ URL::asset('js/bootstrapp.js') }}"></script>
            <script src="{{ URL::asset('js/bootstrapp.min.js') }}"></script>
        </div>
    </body>
</html>