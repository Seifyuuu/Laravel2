@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Prename</th>
        <th scope="col">Age</th>
        <th scope="col">Birthday</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Photo</th>
        <th scope="col">Role_ID</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->prename}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->birthday}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->photo}}</td>
        <td>{{$item->role_id}}</td>
      </tr>  
      @endforeach
</tbody>
</table>
@endsection