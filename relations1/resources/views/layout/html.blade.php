<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <div style="display: flex; justify-content:center">
        <button><a href = {{ route('videos.index')}}>Vidéos</a> </button>
        <button><a href = {{ route('commentaires.index')}}>Commentaires</a></button>
    </div>   
    <div style="display: flex; justify-content:center">
        <button><a href= {{route("videos.create")}}>Créer vidéo</a></button>
        <button><a href= {{route("commentaires.create")}}>Créer commentaire</a></button>
        
    </div>
@yield("content")
<script src="{{asset("js/app.js")}}"></script>
</body>
</html>