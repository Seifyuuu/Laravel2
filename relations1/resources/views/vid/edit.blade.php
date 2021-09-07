@extends("layout.html")

@section("content")
    <br>
    <div style="display: flex; justify-content: center;">
        <form action="{{route("videos.update", $video->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
        <input type="text" name="titre" value="{{$video->id}}">
        <input type="text" name="url" value="{{$video->url}}">
        <input type="text" name="img" value="{{$video->img}}">
        <input type="text" name="duration" value="{{$video->duration}}">
        <input type="text" name="description" value="{{$video->descriptionx}}">
        <button type="submit">Update</button>
        </form>
    </div>
@endsection