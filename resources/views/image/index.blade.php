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
        <h1>List of Images</h1>
        <a href="/image/create">create</a>
    </div>

        @if(count($images) > 0)
        <?php
            $imagecount = count($images);
            $i = 1;
        ?>

        <div id="images">
            <div class="row text-center">
                @foreach($images as $image)
                @if($i == $imagecount)
                    <div class="col-4">
                        <a href="image/{{$image->id}}">
                            <h3>{{$image->name}}</h3> 
                        </a>
                    </div>
                @else
                    <div class="col-4">
                        <a href="image/{{$image->id}}">
                            <h3>{{$image->name}}</h3> 
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
        <p>No image to display</p>
        @endif
    
</body>
</html>