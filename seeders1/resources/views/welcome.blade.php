<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($dataPersonnes as $item)
    <div>
        <span>{{$item->name}}, {{$item->age}}, {{$item->email}}, {{$item->gsm}}</span>
    </div>
        <form action="{{route('delete', $item->id)}}" method="POST">
            @csrf
            @method('delete')
                <button type="submit">Delete</button>
        </form>
        <button><a href="{{route('edit', $item->id)}}" class="btn btn-info">EDIT</a></button>
    @endforeach
</body>
</html>