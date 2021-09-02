@extends('welcome')
@section("content")
<tbody>
    @foreach ($color as $item)
    <tr>
        <th scope="row">{{($item->id)}}</th>
        <td><img src="{{($item->url)}}" style="width: 200px" alt=""></td>
        <td>{{($item->name)}}</td>
        <td>{{($item->description)}}</td>
        <td><button>Edit</button><button>Show</button><button>Delete</button></td>
      </tr>
    @endforeach
</tbody>    
@endsection