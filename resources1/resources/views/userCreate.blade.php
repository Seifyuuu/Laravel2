@extends('welcome')

@section("content")
<div style="display: flex; justify-content: center;">
    <form action="{{route("user.store")}}" method="POST">
        @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <button type="submit">Créer</button>
    </form> 
</div>
@endsection