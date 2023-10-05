<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
    <nav>
        <ul>
            <li><a href="{{route('main.index')}}">main</a></li>
            <li><a href="{{route('contact.index')}}">contacts</a></li>
            <li><a href="{{route('post.index')}}">posts</a></li>
            <li><a href="{{route('about.index')}}">about</a></li>
        </ul>
    </nav>
</div>
    @yield('content')
</div>  
<button type="button" class="btn btn-primary">Primary</button> 
</body>
</html>