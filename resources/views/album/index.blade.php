<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>List of Albums</h1>
        <a href="route{{'album.create'}}"></a>
    </div>

        @if(count($albums) > 0)
        <?php
            $albumcount = count($albums);
            $i = 1;
        ?>

        <div id="albums">
            <div class="row text-center">
                @foreach($albums as $album)
                @if($i == $albumcount)
                    <div class="col-4">
                        <a href="album/{{$album->id}}">
                            <img src="asset{{'storage/' . $album->image}}" alt="{{$album->name}}" class="img-thumbnail">
                        </a>
                        <br>
                        <a href="album/{{$album->id}}">
                            <h3>{{$album->name}}</h3> 
                        </a>
                    </div>
                @else
                    <div class="col-4">
                        <a href="album/{{$album->id}}">
                            <img src="asset{{'storage/' . $album->image}}" alt="{{$album->name}}" class="img-thumbnail">
                        </a>
                        <br>
                        <a href="album/{{$album->id}}">
                            <h3>{{$album->name}}</h3> 
                        </a>
                    </div>
                @endif

                @if($i%3 == 0)

                </div></div><div class="row text-center">

                @else

                </div>

                @endif

                <?php 
                    $i++;
                ?>

                @endforeach
                
            </div>
        </div>
        @else
        <p>No album to display</p>
        @endif
    
</body>
</html>