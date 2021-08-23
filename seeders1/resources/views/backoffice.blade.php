<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Blog</h1>
    <section>
        <form action="{{route('update', $newEntry->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input value="{{$newEntry->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">age(</label>
              <input value="{{$newEntry->age}}" name="age" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">email</label>
              <input value="{{$newEntry->email}}" name="email" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">gsm</label>
                <input value="{{$newEntry->gsm}}" name="gsm" type="text" class="form-control" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </section>


</body>
</html>