@extends("welcome");


@section("content")
<form action="{{route("user.update", $user->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
    <input type="text" name="name" value="{{$user->name}}">
    <input type="text" name="email" value="{{$user->email}}">
    <input type="text" name="password" value="{{$user->password}}">
    </div>
    <div  style="display: flex; justify-content:center;">
    <button type="submit">Update</button>
    </div>

</form>
@endsection
