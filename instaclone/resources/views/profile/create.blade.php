@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="row">
        <h1>Create Profile</h1>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                @csrf
    
              
                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label">Bio</label>
                    <input id="bio" type="text" name="bio" class="form-control">
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label">Gender</label>
                    <input id="gender" type="text" class="form-control" name="gender">
                </div>
                <div class="form-group row">
                    <label for="webiste" class="col-md-4 col-form-label">webiste</label>
                    <input id="webiste" type="text" class="form-control" name="webiste">
                </div>
                <div class="form-group row">
                 
                    <input id="user_id" type="text" class="form-control" name="user_id" hidden>
                </div>

                
                <!-- image -->
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input id="image" type="file"  name="image">
                    
                </div>
              
                    <button class="btn btn-primary">Create profile</button>
                </div>



            </form>
        </div>
    </div>
</div>


@endsection