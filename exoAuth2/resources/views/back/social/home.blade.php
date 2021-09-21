@extends("back.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($contact as $item )
    <div class="card" style="width:18rem;">
        <p class="text-center card-title">ID = {{$item->id}}</p>
        <p class="text-center card-text">Nom du réseau : {{$item->name}}</p>
        <p class="text-center card-text">Lien du réseau : {{$item->url}}</p>
        <a class="btn text-center btn-primary" href="{{route("contact.edit", $item->id)}}">Edit</a>
    </div>  
    @endforeach
</div>
@endsection