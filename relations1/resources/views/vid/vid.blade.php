@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Url</th>
        <th scope="col">IMG</th>
        <th scope="col">Duration</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($videos as $video )
        <tr>
            <td>{{$video->id}}</td>
            <td>{{$video->titre}}</td>
            <td>{{$video->url}}</td>
            <td>{{$video->img}}</td>
            <td>{{$video->duration}}</td>
            <td>{{$video->description}}</td>
            <td class="d-flex">
              <button class="btn-success"><a href="{{route("videos.edit", $video->id)}}">Edit</a></button>
              <button class="btn-warning"><a href="{{route("videos.show", $video->id)}}">Show</a></button>
              <form action="{{route("videos.destroy", $video->id)}}" method="POST">
               @method('delete')
               @csrf
               <button class="btn-danger" type="submit">Delete</button>
              </form></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection