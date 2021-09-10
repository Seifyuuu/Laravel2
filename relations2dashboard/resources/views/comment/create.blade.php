@extends('layout.html')


@section("content")
<br><br><br>
<div style="display: flex; justify-content: center;">
    <h1>Créer Comment</h1>
</div>
<div style="display: flex; justify-content: center;">

<form action="{{route("commentaires.store")}}" method="POST">
@csrf
<input type="text" name="description" placeholder="name">
<select name="article_id" id="" aria-placeholder="role_id">

</select>
<button type="submit">Créer</button>
</form>
</div>


@endsection