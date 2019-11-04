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
        <a href="/request/create">create</a>
    </div>

        @if(count($makeRequests) > 0)
        <?php
            $requestcount = count($makeRequests);
            $i = 1;
        ?>

        <div id="makeRequests">
            <div class="row text-center">
                @foreach($makeRequests as $makeRequest)
                @if($i == $requestcount)
                    <div class="col-4">
                        <a href="request/{{$makeRequest->id}}">
                            <h3>{{$makeRequest->title}}</h3> 
                        </a>
                        <br>
                        <p>{{$makeRequest->detail}}</p>
                        
                    </div>
                @else
                    <div class="col-4">
                        <a href="request/{{$makeRequest->id}}">
                            <h3>{{$makeRequest->title}}</h3> 
                        </a>
                        <br>
                        <p>{{$makeRequest->detail}}</p>
                        
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