@extends("welcome");


@section("content")
<form action="{{route("album.update", $album->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="name" value="{{$album->name}}">
    <input type="date" name="date" value="{{$album->date}}">
    <input type="text" name="author" value="{{$album->author}}">
    <input type="text" name="profession" value="{{$album->profession}}">
    <input type="number" name="age" value="{{$album->age}}">
    <input type="text" name="description" value="{{$album->description}}">
    </div>
    <div  style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection
