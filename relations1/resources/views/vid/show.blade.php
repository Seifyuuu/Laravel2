@extends('layout.html')

@section("content")
<div style="display: flex; justify-content:center; flex-direction:column;">
<p>ID = {{$video->id}}</p>
<p>URL = {{$video->url}}</p>
<p>IMG = {{$video->img}}</p>
<p>DURATION = {{$video->duration}}</p>
<p>TITRE = {{$video->titre}}</p>
<p>DESCRIPTION = {{$video->description}}</p>
</div>
@endsection