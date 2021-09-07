@extends("layout.html")

@section("content")
<table class="table">
    <thead>
      @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Date</th>
        <th scope="col">Contenu</th>
        <th scope="col">Video-ID</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($commentaires as $commentaire )
        <tr>
            <td>{{$commentaire->id}}</td>
            <td>{{$commentaire->nom}}</td>
            <td>{{$commentaire->prenom}}</td>
            <td>{{$commentaire->date}}</td>
            <td>{{$commentaire->contenu}}</td>
            <td>{{$commentaire->video_id}}</td>
            <td class="d-flex">
              <button class="btn-success"><a href="{{route("commentaires.edit", $commentaire->id)}}">Edit</a></button>
              <button class="btn-warning"><a href="{{route("commentaires.show", $commentaire->id)}}">Show</a></button>
              <form action="{{route("commentaires.destroy", $commentaire->id)}}" method="POST">
               @method('delete')
               @csrf
               <button class="btn-danger" type="submit">Delete</button>
              </form></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection