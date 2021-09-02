@extends("welcome")
@section("content")
<div style="display: flex; justify-content: center;">
    <form action="{{route("album.store")}}" method="POST">
        @csrf
    <input type="text" name="name" placeholder="name">
    <input type="date" name="date" placeholder="date">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="profession" placeholder="profession">
    <input type="number" name="age" placeholder="age">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Créer</button>
    </form> 
</div>
@endsection