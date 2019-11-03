<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="route{{'review.store'}}" method="POST" class="pb-5" enctype="multipart/form-data">
        @include('review.form')

        <button type="submit" class="btn btn-primary">upload review</button>
    </form>
</body>
</html>