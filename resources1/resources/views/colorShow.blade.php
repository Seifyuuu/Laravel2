@extends("welcome");

@section("content")
    <div style="display: flex; justify-content:center; flex-direction:column;">
        <th scope="row">{{($article->id)}}</th>
        <td>{{($article->name)}}</td>
        <td>{{($article->date)}}</td>
        <td>{{($article->author)}}</td>
        <td>{{($article->description)}}</td>
        @if (Storage::disk('public')->exists('img/' . $article->photo))
        <td><img style="width: 100px" src="{{ asset('img/' . $article->photo) }}" alt=""></td>
   @else
        <td><img style="width: 100px" src="{{ $article->photo }}" alt=""></td>
   @endif    
    </div>
@endsection