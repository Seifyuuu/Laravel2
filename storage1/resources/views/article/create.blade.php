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
   
<form action="{{route("article.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="name" value="{{ old('name') }}">
<input type="date" name="date" placeholder="date" value="{{ old('date') }}">
<input type="text" name="author" placeholder="author" value="{{ old('author') }}">
<input type="text" name="description" placeholder="description" value="{{ old('description') }}">
<input type="file" name="photo" placeholder="photo" value="{{ old('photo') }}">
<button type="submit">Créer</button>
</form>
</div>
@endsection