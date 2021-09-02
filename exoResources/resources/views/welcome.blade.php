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
    <span style="font-size: x-large">Photos</span> <button>Create</button>
    </div>
    <br>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">URL</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        @yield("content")
      </table>

    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>