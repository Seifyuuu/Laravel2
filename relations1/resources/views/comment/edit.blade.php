@extends("layout.html")

@section("content")
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div style="display: flex; justify-content: center;">
    <form action="{{route("commentaires.update", $commentaire->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
    <input type="text" name="nom" placeholder="nom" value="{{$commentaire->nom}}">
    <input type="text" name="prenom" placeholder="prenom" value="{{ $commentaire->prenom}}">
    <input type="text" name="date" placeholder="date" value="{{ $commentaire->date}}">
    <input type="text" name="contenu" placeholder="contenu" value="{{ $commentaire->contenu}}">
    <input type="text" name="video_id" placeholder="video_id" value="{{ $commentaire->video_id}}">
    <button type="submit">Update</button>
    </form>
</div>
    
@endsection