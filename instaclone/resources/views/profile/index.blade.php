@extends('layouts.navbar')
@section('content')
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->user_name}}</div>
                    
                </div>
                <a href="">Add New Post</a>
            </div>
            
            
                <a href="">Edit Profile</a>
            

            <div class="d-flex">
                <div class="pr-5"><strong>8</strong> posts</div>
                <div class="pr-5"><strong>87</strong> followers</div>
                <div class="pr-5"><strong>728</strong> following</div>
            </div>
            <div id="user_name" class="pt-4 "><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}} </div>
        </div>
    </div>
    <div class="row pt-5 ">
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="w-100" >
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection 