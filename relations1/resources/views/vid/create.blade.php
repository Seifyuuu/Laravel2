@extends("layout.html")

@section("content")
<br>
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
   
    <form action="{{route("videos.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="titre" placeholder="titre" value="{{ old('titre') }}">
    <input type="text" name="url" placeholder="url" value="{{ old('url') }}">
    <input type="text" name="img" placeholder="img" value="{{ old('img') }}">
    <input type="text" name="duration" placeholder="duration" value="{{ old('duration') }}">
    <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
    <button type="submit">Créer</button>
    </form>
    </div>
@endsection