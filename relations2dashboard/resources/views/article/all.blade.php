@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">User_ID</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($articles as $item)
    <tr>
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->description}}</td>
    <td>{{$item->date}}</td>
    <td>{{$item->user_id}}</td>
    
  </tr>
    @endforeach
  
</tbody>
</table>
@endsection