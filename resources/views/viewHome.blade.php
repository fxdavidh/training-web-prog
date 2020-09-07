<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $key => $article)
            <tr>
              <th scope="row">{{$key}}</th>
              <td>{{$article->title}}</td>
              <td>{{$article->content}}</td>
              <td>{{$article->author}}</td>
              <td><img src="{{asset('storage/'.$article->image)}}" width="100px" alt="{{'image-'.$key}}"></td>
              <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
