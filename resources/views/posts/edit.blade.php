<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    a {
        display: block;
        text-decoration: none;
        margin-top: 5px;
        font-size: 17px;
        font-weight: bold;
    }
    a, h1 {
        color: #8f8a8a
    }
</style>
<body>


    <div class="container">
        <form class="text-center border m-3 p-3" action="{{route('posts.update', $posts->id)}}" method="post">
            @method("PUT")
            @csrf
            <h1>Edit Post: {{$posts->title}}</h1>
            <div class="mb-3">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$posts->title}}" name="title">
            </div>
            <div class="mb-3">
            @error('body')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" class="form-control @error('body') is-invalid @enderror" value="{{$posts->body}}" name="body">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{route('posts.index')}}">Back To Add A New Post</a>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
