<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/yo.css")}}">
</head>
<body>

    <br>
    <div style="display: flex; justify-content: center;">

    <span style="font-size: x-large">Photos</span>
</div>

    <div style="display: flex; justify-content: center;">
    <button><a href="{{route("color.index")}}">Home</a></button>
    <button><a href="{{route("color.create")}}">Create</a></button>
    </div>
    <br>


    <br>
    <div style="display: flex; justify-content: center;">

    <span style="font-size: x-large">Albums</span>
</div>

    <div style="display: flex; justify-content: center;">
    <button><a href="{{route("album.index")}}">Home</a></button>
    <button><a href="{{route("album.create")}}">Create</a></button>
    </div>
    <br>
    
    @yield("content")


    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>