@extends("layouts.html")

@section("content")
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div style="display: flex; justify-content: center;">
<form action="{{route("user.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="name" value="{{ old('name') }}">
<input type="text" name="prename" placeholder="prename" value="{{ old('prename') }}">
<input type="date" name="birthday" placeholder="date" value="{{ old('date') }}">
<input type="number" name="age" placeholder="age" value="{{ old('age') }}">
<input type="email" name="email" placeholder="email" value="{{ old('email') }}">
<input type="password" name="password" placeholder="password" value="{{ old('password') }}">
<input type="file" name="photo" placeholder="photo">

<button type="submit">Créer</button>
</form>
</div>
@endsection


