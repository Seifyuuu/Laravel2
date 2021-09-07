@extends("layout.html")

@section("content")
<br>
<div style="display: flex; justify-content: center;">
    <form action="{{route("commentaires.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="nom" placeholder="nom" value="{{ old('nom') }}">
    <input type="text" name="prenom" placeholder="prenom" value="{{ old('prenom') }}">
    <input type="text" name="date" placeholder="date" value="{{ old('date') }}">
    <input type="text" name="contenu" placeholder="contenu" value="{{ old('contenu') }}">
    <input type="text" name="video_id" placeholder="video_id" value="{{ old('video_id') }}">
    <button type="submit">Créer</button>
    </form>
    </div>
@endsection