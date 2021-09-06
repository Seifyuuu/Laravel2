@extends("layouts.html")

@section("content")
<div style="display: flex; justify-content: center;">
<form action="{{route("user.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="name">
<input type="text" name="prename" placeholder="prename">
<input type="date" name="birthday" placeholder="date">
<input type="number" name="age" placeholder="age">
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
<input type="file" name="photo" placeholder="photo">

<button type="submit">Créer</button>
</form>
</div>
@endsection


