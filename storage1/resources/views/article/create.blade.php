@extends("layouts.html")

@section("content")
<div style="display: flex; justify-content: center;">
<form action="{{route("article.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="name">
<input type="date" name="date" placeholder="date">
<input type="text" name="author" placeholder="author">
<input type="text" name="description" placeholder="description">
<input type="file" name="photo" placeholder="photo">
<button type="submit">Créer</button>
</form>
</div>
@endsection