<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    @extends('navBarTemplate')

    @section('navBar')
    <h1>Post collection</h1>
    @foreach($posts as $post)
        <h3>
            {{ $post->id }}
            <a href="{{ route('post', $post->id)}}">
                {{ $post->titulo }}
            </a>
        </h3>
   @endforeach
   @endsection('navBar')
</body>
</html>