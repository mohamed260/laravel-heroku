@extends('welcome')

@section('content')
        
            @foreach ($posts['articles'] as $post)

                <ul class="list-group">
                    <li class="list-group-item active btn-dark">{{ $post['title'] }}</li>
                    <li class="list-group-item"><img src="{{ $post['urlToImage'] }}" width="430" hieght="250"><br>{{ $post['content'] }}</li>
                    <li class="list-group-item">{{ $post['source']['name'] }} {{ $post['publishedAt'] }}</li>
                </ul>
                <br>
          
            @endforeach

         

@endsection