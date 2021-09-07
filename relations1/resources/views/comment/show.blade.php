@extends('layout.html')

@section("content")
<div style="display: flex; justify-content:center; flex-direction:column;">
<p>ID : {{$commentaire->id}}</p>
<p>Name : {{$commentaire->nom}}</p>
<p>Prénom : {{$commentaire->prenom}}</p>
<p>Date : {{$commentaire->date}}</p>
<p>Contenu : {{$commentaire->contenu}}</p>
<p>Video_ID : {{$commentaire->video_id}}</p>
</div>
@endsection