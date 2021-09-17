@extends("back.html")
@section("content")


<a href="portfolio/create">Créer Portfolio</a>
    <div>
    @foreach ($portfolio as $item)
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column">
        <span>{{$item->id}}</span>
        <span>{{$item->name}}</span>
        <span>{{$item->text}}</span>
        <span>{{$item->photo}}</span>
    <div style="display: flex; justify-content:center; align-items:center; flex-direction:column">
        
            <button class="btn-success"><a href="{{route("portfolio.edit", $item->id)}}">Edit</a></button>
            <button class="btn-warning"><a href="{{route("portfolio.show", $item->id)}}">Show</a></button>
            <form action="{{route("portfolio.destroy", $item->id)}}" method="POST">
            @method('delete')
            @csrf
            <button class="btn-danger" type="submit">Delete</button>
            </form></div>
    </div>
    @endforeach
</div>



@endsection