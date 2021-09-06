@extends('welcome')
@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
<tbody>
      @foreach ($user as $item)
      <tr>
          <th scope="row">{{($item->id)}}</th>
          <td>{{($item->name)}}</td>
          <td>{{($item->email)}}</td>
          <td>{{($item->password)}}</td>
          <td class="d-flex">
              <button class="btn-success"><a href="{{route("user.edit", $item->id)}}">Edit</a></button>
              <button class="btn-warning"><a href="{{route("user.show", $item->id)}}">Show</a></button>
              <form action="{{route("user.destroy", $item->id)}}" method="POST">
              @method('delete')
              @csrf
              <button class="btn-danger" type="submit">Delete</button>
              </form></td>
        </tr>
      @endforeach
</tbody>    
</table>

@endsection