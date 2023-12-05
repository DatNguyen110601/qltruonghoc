<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Wellcome to laravel</h2>
    <ul>
        @for ($i = 1; $i < 5; $i++)
            <li><a href="{{ route('user.name', ['id'=>$i]) }}">param {{$i}}</a></li>      
        @endfor
    </ul>
</body>
</html>