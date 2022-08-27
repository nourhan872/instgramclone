<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    {{-- show post --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                
             
                <th>Caption</th>
                <th>Image</th>
                
            </tr>
        </thead>
        <tbody>
           
            <tr>
                
               
                <td>{{ $post->caption }}</td>
<td>
    @foreach ($post->images as $image)
                          
    <img src="{{Storage::disk('public')->url('/images//'.$image->image)}}" width="400px" >

    @endforeach
</td>
            </tr>
         
        </tbody>
    </table>
</body>
</html>