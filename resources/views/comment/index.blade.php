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
        <h1>List of Comments</h1>
        <a href="/comment/create">create</a>
    </div>

        @if(count($comments) > 0)
        <?php
            $commentcount = count($comments);
            $i = 1;
        ?>

        <div id="comments">
            <div class="row text-center">
                @foreach($comments as $comment)
                @if($i == $commentcount)
                    <div class="col-4">
                        <a href="comment/{{$comment->id}}">
                            <p>{{$comment->comment}}</p>
                        </a>
                    </div>
                @else
                    <div class="col-4">
                        <a href="comment/{{$comment->id}}">
                            <p>{{$comment->comment}}</p>
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
        <p>No comment to display</p>
        @endif
    
</body>
</html>