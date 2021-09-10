@extends('layout.html')


@section("content")
<br><br><br>
<div style="display: flex; justify-content: center;">
    <h1>Créer User</h1>
</div>
<div style="display: flex; justify-content: center;">

<form action="{{route("users.store")}}" method="POST">
    @csrf
<input type="text" name="name" placeholder="name">
<input type="text" name="prename" placeholder="prename">
<input type="number" name="age" placeholder="age">
<input type="date" name="birthday" placeholder="birthday">
<input type="email" name="email" placeholder="email">
<input type="text" name="password" placeholder="password">
<input type="text" name="photo" placeholder="photo">
<select name="role_id" id="" aria-placeholder="role_id">

</select>


<button type="submit">Créer</button>
</form>
</div>


@endsection