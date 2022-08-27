@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="row">
        <h1>Add New Post</h1>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- caption -->
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <!-- image -->
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image[]" multiple required autocomplete="image" autofocus>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <input  type="text" name="user_id" hidden value="{{$user->id}}">

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>



            </form>
        </div>
    </div>
</div>


@endsection