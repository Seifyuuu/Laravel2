<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>User connecté</h1>
@auth
<h3>{{Auth::user()->id}} {{Auth::user()->name}} {{Auth::user()->email}} {{Auth::user()->age}} {{Auth::user()->prenom}}</h3> 
@else
<h3>personne</h3>
@endauth

<h1>All users</h1>
@foreach ($users as $member)
    <div style="border: 1mm solid black"><p>ID = {{$member->id}} </p>&nbsp;<p> Name = {{$member->name}} </p>&nbsp;<p> Prénom = {{$member->prenom}} </p>&nbsp;<p> Email = {{$member->email}} </p>&nbsp;<p>Âge = {{$member->age}} </p></div>
@endforeach
</body>
</html>