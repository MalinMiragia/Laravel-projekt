<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
        <a href="/posts">Visa alla Posts</a>
        <a href="/posts/create">Lägg till Post</a>
        </div>
    </nav> 
    @yield('content')
</body>
</html>