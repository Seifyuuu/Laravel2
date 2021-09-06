@extends("layouts.html")


@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date</th>
        <th scope="col">Author</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>

      @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
      @endif


      @foreach ($article as $item)
      <tr>
          <th scope="row">{{($item->id)}}</th>
          <td>{{($item->name)}}</td>
          <td>{{($item->date)}}</td>
          <td>{{($item->author)}}</td>
          <td>{{($item->description)}}</td>
          @if (Storage::disk('public')->exists('img/' . $item->photo))
          <td><img style="width: 100px" src="{{ asset('img/' . $item->photo) }}" alt=""></td>
     @else
          <td><img style="width: 100px" src="{{ $item->photo }}" alt=""></td>
     @endif          <td class="d-flex">
              <button class="btn-success"><a href="{{route("article.edit", $item->id)}}">Edit</a></button>
              <button class="btn-warning"><a href="{{route("article.show", $item->id)}}">Show</a></button>
              <form action="{{route("article.destroy", $item->id)}}" method="POST">
               @method('delete')
               @csrf
               <button class="btn-danger" type="submit">Delete</button>
              </form></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection