@extends("welcome")

@section("content")
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Date</th>
    <th scope="col">Author</th>
    <th scope="col">Profession</th>
    <th scope="col">Age</th>
    <th scope="col">Description</th>
    <th scope="col">Actions</th>
  </tr>
</thead>
<tbody>
  @foreach ($album as $item)
  <tr>
      <th scope="row">{{($item->id)}}</th>
      <td>{{($item->name)}}</td>
      <td>{{($item->date)}}</td>
      <td>{{($item->author)}}</td>
      <td>{{($item->profession)}}</td>
      <td>{{($item->age)}}</td>
      <td>{{($item->description)}}</td>
      <td class="d-flex">
          <button class="btn-success"><a href="{{route("album.edit", $item->id)}}">Edit</a></button>
          <button class="btn-warning"><a href="{{route("album.show", $item->id)}}">Show</a></button>
          <form action="{{route("album.destroy", $item->id)}}" method="POST">
           @method('delete')
           @csrf
           <button class="btn-danger" type="submit">Delete</button>
          </form>
       </td>
    </tr>
  @endforeach
</tbody>
</table>
@endsection