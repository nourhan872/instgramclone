@extends('layouts.navbar')
@section('content')
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">user Name</div>
                    
                </div>
                <a href="">Add New Post</a>
            </div>
            
            
                <a href="">Edit Profile</a>
            

            <div class="d-flex">
                <div class="pr-5"><strong>8</strong> posts</div>
                <div class="pr-5"><strong>87</strong> followers</div>
                <div class="pr-5"><strong>728</strong> following</div>
            </div>
        </div>
    </div>
</div>

    <div class="row pt-5">
        {{-- add posts of user --}}
    </div>
</div>
@endsection 