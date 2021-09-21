@extends("back.html")
@section("content")


<div style="display: flex; justify-content:center;">
<a href="portfolio/create" class="btn btn-success">Créer Portfolio</a>
</div>
<br>
<div style="display: flex; justify-content:center; flex-direction:row">
    @foreach ($portfolio as $item)
    <div class="card" style="width: 18rem; height:600px, position:relative">
        <div class="card-body">
          <p class="card-title text-center fw-bold">{{$item->id}}</p>
          <p class="card-title text-center">{{$item->name}}</p>
          <p class="card-text text-center fw-light">{{$item->text}}</p>
          <div>
            <hr>
           <div style="display: flex; justify-content:center">
              <a class="btn btn-warning" href="{{route("portfolio.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
              <a class="btn btn-secondary" href="{{route("portfolio.show", $item->id)}}">Show</a></button>
            </div>
            <hr>
            <div style="display: flex; justify-content:center;">
              <form action="{{route("portfolio.destroy", $item->id)}}" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</div>



@endsection