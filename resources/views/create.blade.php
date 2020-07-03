@extends('welcome')

@section('content')


    <form action="store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name="name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image:</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
        
        <div class="form-group">
            <input type="submit" class="form-control btn btn-dark" id="exampleFormControlFile1" value="Save">
        </div>

    </form>

@endsection