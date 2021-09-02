@extends("welcome");

@section("content")
    <div style="display: flex; justify-content:center; flex-direction:column;">
    <img src="{{$color->url}}" style="width: 300px"></i>
    <p value="">{{$color->name}}</p>
    <p value="">{{$color->description}}</p>
    </div>
@endsection