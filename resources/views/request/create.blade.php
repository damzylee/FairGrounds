<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/request" method="POST" class="pb-5" enctype="multipart/form-data">
        @include('request.form')

        <button type="submit" class="btn btn-primary">Register request</button>
    </form>
</body>
</html>