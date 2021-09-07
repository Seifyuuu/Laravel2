@extends("layout.html")

@section("content")
<br>
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

    <form action="{{route("commentaires.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="nom" placeholder="nom" value="{{ old('nom') }}">
    <input type="text" name="prenom" placeholder="prenom" value="{{ old('prenom') }}">
    <input type="text" name="date" placeholder="date" value="{{ old('date') }}">
    <input type="text" name="contenu" placeholder="contenu" value="{{ old('contenu') }}">
    <span>Quelle vidéo :</span>
    <select name="video_id">
       @foreach ($video as $video)
           <option>n°{{$video->id}}</option>
       @endforeach
    </select>
    <button type="submit">Créer</button>
    </form>
    </div>
@endsection