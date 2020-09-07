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

    @if(Session::has('success'))
    <div class="alert alert-success">
        <span>{{Session::get('success')}}</span>
    </div>
    @endif

    <form class="p-5" action="{{route('createArticle')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Article Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter your title">
        </div>

        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror

        <div class="form-group">
            <label for="content">Article</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="author">Author Name</label>
            <input name="author" type="text" class="form-control" id="author" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>
