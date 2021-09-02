@extends('welcome')
@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">URL</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
<tbody>
    @foreach ($color as $item)
    <tr>
        <th scope="row">{{($item->id)}}</th>
        <td><img src="{{($item->url)}}" style="width: 200px" alt=""></td>
        <td>{{($item->name)}}</td>
        <td>{{($item->description)}}</td>
        <td>
            <button><a href="{{route("color.edit", $item->id)}}">Edit</a></button>
            <form action="{{route("color.destroy", $item->id)}}" method="POST">
             @method('delete')
             @csrf
             <button type="submit">Delete</button>
            </form></td>
      </tr>
    @endforeach
</tbody>    
</table>

@endsection