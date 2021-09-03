@extends("welcome");

@section("content")
    <div style="display: flex; justify-content:center; flex-direction:column;">
    <img src="{{$user->url}}" style="width: 300px"></i>
    <p value="">{{$user->name}}</p>
    <p value="">{{$user->description}}</p>
    </div>
@endsection