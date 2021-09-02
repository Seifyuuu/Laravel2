@extends("welcome")
@section("content")
<div style="display: flex; justify-content:center; flex-direction:column;">
    <p value="">{{$album->name}}</p>
    <p value="">{{$album->date}}</p>
    <p value="">{{$album->author}}</p>
    <p value="">{{$album->profession}}</p>
    <p value="">{{$album->age}}</p>
    <p value="">{{$album->description}}</p>
    </div>
@endsection