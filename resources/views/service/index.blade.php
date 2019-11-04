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
        <h1>List of services</h1>
        <a href="/service/create">create</a>
    </div>

        @if(count($services) > 0)
        <?php
            $servicecount = count($services);
            $i = 1;
        ?>

        <div id="services">
            <div class="row text-center">
                @foreach($services as $service)
                @if($i == $servicecount)
                    <div class="col-4">
                        <a href="service/{{$service->id}}">
                            <h3>{{$service->name}}</h3> 
                        </a>
                    </div>
                @else
                    <div class="col-4">
                        <a href="service/{{$service->id}}">
                            <h3>{{$service->name}}</h3> 
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
        <p>No service to display</p>
        @endif
    
</body>
</html>