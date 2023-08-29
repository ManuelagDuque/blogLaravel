<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->titulo}}</title>
</head>
<body>
    @extends('navBarTemplate')

    @section('navBar')
    <h1>
        {{$post->titulo}}
    </h1>
    <p>
        {{$post->contenido}}
    </p>
    @endsection('navBar')
</body>
</html>