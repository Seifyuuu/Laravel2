@extends('layout.html')
@section("content")
<br><br><br>
<div style="display: flex; justify-content: center;">
    <h1>Créer Rôle</h1>
</div>
<div style="display: flex; justify-content: center;">

<form action="{{route("roles.store")}}" method="POST">
    @csrf
<select name="role_id" id="" aria-placeholder="role_id">
<option value="">Admin</option>
<option value="">Editeur</option>
<option value="">Visiteur</option>
</select>
<button type="submit">Créer</button>
</form>
</div>


@endsection