@extends("back.html")

@section("content")
    @foreach ($abou as $item )
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column">
        <p>{{$item->id}}</p>
        <p style="text-align: center">{{$item->text1}}</p>
        <p>{{$item->text2}}</p>
        <button class="btn-success"><a href="{{route("abou.edit", $item->id)}}">Edit</a></button>
    </div>  
    @endforeach
@endsection