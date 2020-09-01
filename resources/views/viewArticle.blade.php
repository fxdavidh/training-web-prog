<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form class="p-5" action="" method="">
        <div class="form-group">
          <label for="title">Article Title</label>
          <input name="title" type="text" class="form-control" id="title" >
        </div>
        <div class="form-group">
            <label for="content">Article</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="author">Author Name</label>
            <input name="author" type="text" class="form-control" id="author" >
        </div>
        {{-- <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div> --}}
      </form>
</body>
</html>
