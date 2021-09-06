@extends("layouts.html")

@section("content")
<div style="display: flex; justify-content:center; flex-direction:column;">
    <th scope="row">{{($article->id)}}</th><br>
    <td>{{($article->name)}}</td><br>
    <td>{{($article->date)}}</td><br>
    <td>{{($article->author)}}</td><br>
    <td>{{($article->description)}}</td><br>
    @if (Storage::disk('public')->exists('img/' . $article->photo))
    <td><img style="width: 100px" src="{{ asset('img/' . $article->photo) }}" alt=""></td>
@else
    <td><img style="width: 100px" src="{{ $article->photo }}" alt=""></td>
@endif    
    </div>
@endsection