<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit profile</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('profile.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>profile bio:</strong>
                        <input type="text" name="bio" class="form-control" placeholder="profile bio"
                            value="{{ $profile->bio }}">
                    </div>
                    <div class="form-group">
                        <strong>profile gender:</strong>
                        <input type="text" name="gender" class="form-control" placeholder="profile gender"
                            value="{{ $profile->gender }}">
                    </div>
                    <div class="form-group">
                        <strong>profile website:</strong>
                        <input type="text" name="webiste" class="form-control" placeholder="profile webiste"
                            value="{{ $profile->webiste }}">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>profile image:</strong>
                        <input type="file" name="image" class="form-control"
                            placeholder="profile image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Edit</button>
            </div>
        </form>
    </div>
</body>
</html>