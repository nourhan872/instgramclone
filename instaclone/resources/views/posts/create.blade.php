@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="row">
        <h1>Add New Post</h1>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data"></form>
                @csrf
    
                <!-- caption -->
                <div class="row">
                    <label for="caption">Post caption</label>
                   <input type="text" name="caption" required>
                </div>
                <div class="row">
                    <label for="image"> post image</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
                <div class="row pt-4">
                  <input type="submit" value="Add new post" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection