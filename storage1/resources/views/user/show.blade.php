;@extends("layouts.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:column;">
    <th scope="row">ID : {{($user->id)}}</th><br>
    <td>{{($user->name)}}</td><br>
    <td>{{($user->prename)}}</td><br>
    <td>{{($user->birthday)}}</td><br>
    <td>{{($user->date)}}</td><br>
    <td>{{($user->email)}}</td><br>
    <td>{{($user->password)}}</td><br>
    @if (Storage::disk('public')->exists('img/' . $user->photo))
    <td><img style="width: 100px" src="{{ asset('img/' . $user->photo) }}" alt=""></td>
@else
    <td><img style="width: 100px" src="{{ $user->photo }}" alt=""></td>
@endif    
    </div>
@endsection