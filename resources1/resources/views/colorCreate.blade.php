@extends('welcome')

@section("content")
<div style="display: flex; justify-content: center;">
    <form action="{{route("color.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="file" name="url" placeholder="url">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Créer</button>
    </form> 
</div>
@endsection