@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($location as $item )
    <div class="card" style="width:18rem;">
        <p class="text-center card-title fw-bold">{{$item->id}}</p>
        <p class="text-center card-text">{{$item->text1}}</p>
        <p class="text-center card-text fw-light">{{$item->text2}}</p>
        <a class="btn btn-success" href="{{route("location.edit", $item->id)}}">Edit</a>
    </div>  
    @endforeach
</div>
@endsection