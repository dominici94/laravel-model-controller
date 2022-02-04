<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <div class="card-movie">
                    <h1>{{$movie["title"]}}</h1>
                </div>
            </li>
        @endforeach
    </ul>
    
</body>
</html>

