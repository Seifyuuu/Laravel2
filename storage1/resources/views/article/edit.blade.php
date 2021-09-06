@extends("layouts.html");


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
<form action="{{route("article.update", $article->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="name" value="{{$article->name}}">
    <input type="date" name="date" value="{{$article->date}}">
    <input type="text" name="author" value="{{$article->author}}">
    <input type="text" name="description" value="{{$article->description}}">
    <input type="photo" name="photo" value="{{$article->photo}}">
    </div>
    <div style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection
