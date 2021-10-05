<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
    
    Voilà le mail 

    <span style="color:red;">{{$contenuMail["name"]}}</span>
    {{-- les classes bootstrap ne fonctionnent pas  --}}
    <span class="text-warning">{{$contenuMail["email"]}}</span>
    <span>{{$contenuMail["phone"]}}</span>
    <span>{{$contenuMail["message"]}}</span>

    <script src="{{asset("js/scripts.js")}}"></script>

</body>
</html>