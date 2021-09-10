@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
      </tr>  
      @endforeach
</tbody>
</table>
@endsection