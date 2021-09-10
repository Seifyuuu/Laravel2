@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Description</th>
        <th scope="col">Article_ID</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($commentaires as $item)
    <tr>
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->description}}</td>
    <td>{{$item->article_id}}</td>
    
  </tr>
    @endforeach
  
</tbody>
</table>
@endsection