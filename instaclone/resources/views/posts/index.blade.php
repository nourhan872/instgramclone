<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>posts</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create post</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                 
                    <th>Caption</th>
                    <th>Image</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    
                   
                    <td>{{ $post->caption }}</td>
<td>
                    <a  href="{{ route('posts.show',$post['id']) }}">  <img src="{{Storage::disk('public')->url('/images//'.$post->images[0]->image)}}" width="400px"></a>

</td>
                    <td>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                           
                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $posts->links() !!}
    </div>
</body>
</html>