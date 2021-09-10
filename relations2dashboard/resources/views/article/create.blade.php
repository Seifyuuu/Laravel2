@extends('layout.html')


@section("content")
<br><br><br>
<div style="display: flex; justify-content: center;">
    <h1>Créer Article</h1>
</div>
<div style="display: flex; justify-content: center;">

<form action="{{route("articles.store")}}" method="POST">
@csrf
<input type="text" name="name" placeholder="name">
<input type="text" name="description" placeholder="description">
<input type="date" name="date" placeholder="date">
<select name="user_id" id="" aria-placeholder="user_id">

</select>


<button type="submit">Créer</button>
</form>
</div>


@endsection