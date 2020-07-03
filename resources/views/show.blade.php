@extends('welcome')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            
            <td>{{ $post->name }}</td>
            <td>{{ $post->description }}</td>
            <td><img src="{{ asset('images/'.$post->image) }}" width="100" hieght="100"></td>
        </tr>  
        @endforeach
            
        </tbody>
    </table>

    
@endsection