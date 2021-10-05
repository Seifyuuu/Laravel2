<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body style="background-color:lightgreen;">
    
    <span>Voilà le mail du client nommé <br><b><u>{{$contenuMail["name"]}}</b></u> <i>({{$contenuMail["phone"]}})</i></span> 
    <div style="padding-top:1%;" >
        <span><i>{{$contenuMail["email"]}}</i></span>
        <div style="padding-top:5%">
            <span>Message du client :</span>
            <div style="border:solid black 2px; padding:3%">
                <span>{{$contenuMail["message"]}}</span>
            </div> 
        </div>
     
    </div>

</body>
</html>