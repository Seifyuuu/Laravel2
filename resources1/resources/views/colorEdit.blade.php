@extends("welcome");


@section("content")
<form action="{{route("color.update", $color->id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="file" name="url" value="{{$color->url}}">
    <input type="text" name="name" value="{{$color->name}}">
    <input type="text" name="description" value="{{$color->description}}">
    </div>
    <div  style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection
