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
        <h1>List of requests</h1>
        <a href="route{{'request.create'}}"></a>
    </div>

        @if(count($requests) > 0)
        <?php
            $requestcount = count($requests);
            $i = 1;
        ?>

        <div id="requests">
            <div class="row text-center">
                @foreach($requests as $request)
                @if($i == $requestcount)
                    <div class="col-4">
                        <a href="request/{{$request->id}}">
                            <h3>{{$request->title}}</h3> 
                        </a>
                        <br>
                        <p>{{$request->detail}}</p>
                        
                    </div>
                @else
                    <div class="col-4">
                        <a href="request/{{$request->id}}">
                            <h3>{{$request->title}}</h3> 
                        </a>
                        <br>
                        <p>{{$request->detail}}</p>
                        
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
        <p>No request to display</p>
        @endif
    
</body>
</html>