@extends("layouts.html")


@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Prename</th>
        <th scope="col">Birthday</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Photo</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
      <tr>
@foreach ($user as $member)
<th scope="row">{{($member->id)}}</th>
<td>{{($member->name)}}</td>
<td>{{($member->prename)}}</td>
<td>{{($member->birthday)}}</td>
<td>{{($member->age)}}</td>
<td>{{($member->password)}}</td>
<td>{{($member->email)}}</td>
<td>{{($member->photo)}}</td>
<td class="d-flex">
  <button class="btn-success"><a href="{{route("user.edit", $member->id)}}">Edit</a></button>
  <button class="btn-warning"><a href="{{route("user.show", $member->id)}}">Show</a></button>
  <form action="{{route("user.destroy", $member->id)}}" method="POST">
  @method('delete')
  @csrf
  <button class="btn-danger" type="submit">Delete</button>
  </form></td>
</tr>

@endforeach
    </tbody>
  </table>
  @endsection