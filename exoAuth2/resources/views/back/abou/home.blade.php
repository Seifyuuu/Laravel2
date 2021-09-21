@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($abou as $item )
    <div class="card" style="width:18rem;">
        <p class="text-center card-title">{{$item->id}}</p>
        <p class="text-center card-text">{{$item->text1}}</p>
        <p class="text-center card-text">{{$item->text2}}</p>
        <a class="btn btn-primary"href="{{route("abou.edit", $item->id)}}">Edit</a>
    @endforeach
</div>
@endsection