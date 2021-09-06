@extends("layouts.html");


@section("content")
<form action="{{route("article.update", $user->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    
    <input type="text" name="name" value="{{$user->name}}">
    <input type="text" name="prename" value="{{$user->prename}}">
    <input type="date" name="birthday" value="{{$user->birthday}}">
    <input type="text" name="age" value="{{$user->age}}">
    <input type="photo" name="photo" value="{{$user->photo}}">
    <input type="text" name="email" value="{{$user->email}}">
    <input type="password" name="email" value="{{$user->password}}">
    
    </div>
    <div  style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection
