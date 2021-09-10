<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content:center">
        <button><a href="{{route("roles.index")}}">Rôles</a></button>
        <button><a href="{{route("users.index")}}">Users</a></button>
        <button><a href="{{route("articles.index")}}">Articles</a></button>
        <button><a href="{{route("commentaires.index")}}">Commentaires</a></button>
    </div>
    <div style="display: flex; justify-content:center">
        <button><a href="{{route("roles.create")}}">Créer rôle</a></button>
        <button><a href="{{route("users.create")}}">Créer user</a></button>
        <button><a href="{{route("articles.create")}}">Créer article</a></button>
        <button><a href="{{route("commentaires.create")}}">Créer commentaire</a></button>
    </div>           
    @yield("content")

    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>