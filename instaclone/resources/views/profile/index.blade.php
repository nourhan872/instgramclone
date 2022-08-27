@extends('layouts.navbar')
@section('content')
    <div class="row">
        <div class="col-3 p-5">
        <img  class="rounded-circle" style="border:2px bla$profile = User::find($id)->profile;

$user = User::find($id);

$posts = $user->posts;

return view('profile.index', ['profile' => $profile, 'posts' => $posts]);ck solid" src="{{Storage::disk('public')->url('/images//'.$profile->image)}}" width="200px" height="200px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$profile->user->user_name}}</div>
                    
                </div>
                Bio: {{$profile->bio}}
                <br>
                Website: {{$profile->webiste}}
                <br>
                Gender : {{$profile->gender}}
                <br>
                <a href="{{route('posts.create')}}">Add New Post</a>
            </div>
            
            
                <a href="{{route('profile.edit', $profile->id)}}">Edit Profile</a>
            

            <div class="d-flex">
                <div class="pr-5"><strong>{{$posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>87</strong> followers</div>
                <div class="pr-5"><strong>728</strong> following</div>
            </div>
            
        </div>
    </div>
    <div class="row pt-5 " >
       
       @foreach ($posts as $post )
       <div class="col-4" >
       <a  href="{{ route('posts.show',$post['id']) }}">  <img src="{{Storage::disk('public')->url('/images//'.$post->images[0]->image)}}" width="400px"></a>
      </div>
       @endforeach
     
     
  </div>
</div>
@endsection 