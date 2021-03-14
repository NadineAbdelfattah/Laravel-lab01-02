{{-- Hello {{$name}}



@if ($name == 'Nadine')
<h1>Hi nido!</h1>
@else
    <h1>Sorry</h1>
@endif --}}

{{-- @foreach ($posts as $post)
    {{$post['id']}}
@endforeach --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="container">
    <!-- As a link -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">All posts</a>
    </div>
  </nav>
  
  <a href="#" class="btn btn-success">Create Post</a>

  <table class="table mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Title</th>
        <th scope="col">Posted by</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['title']}}</td>
        <td>{{$post['posted_by']}}</td>
        <td>{{$post['created_at']}}</td>
        <td class="col">
            <a href="{{route('posts.show',['post'=>$post['id']])}}" class="btn btn-info">View</a>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


