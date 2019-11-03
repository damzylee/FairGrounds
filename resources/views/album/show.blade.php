<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <h1>Details of {{$album->name}}</h1>
            <p><a href="album/{{$album->id}}/edit">Edit</a></p>

            <form action="album/{{$album->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div>
        <p><strong>Name:</strong>  {{$album->name}}</p>
        <p><strong>Description:</strong>  {{$album->description}}</p>
    </div>

    @if($album->image)
        <div class="row">
            <div class="col-12">
                <img src="asset{{'storage/' . $album->image}}" alt="{{$album->name}}" class="img-thumbnail">
            </div>
        </div>
    @endif
</body>
</html>