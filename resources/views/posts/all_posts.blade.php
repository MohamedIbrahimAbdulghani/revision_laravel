<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    a {
        text-decoration: none;
        margin-top: 5px;
        font-size: 17px;
        font-weight: bold;
    }
    a, h1 {
        color: #8f8a8a
    }
    form {
        display: inline;
    }
    .button {
        margin-top: 4.5px !important;
    }
</style>
<body>

    <div class="container">
        <table class="table">
            <h1 class="text-center">All Posts</h1>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">BODY</th>
                <th scope="col">PROCESS</th>
                </tr>
            </thead>
            <tbody>
        @foreach($posts as $post)
                <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-secondary">Edit</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-2 button">Soft Delete</button>
                    </form>
                </td>
                </tr>
        @endforeach
            </tbody>
        </table>
            <a href="{{route('posts.create')}}" class="d-table m-auto">Back To Add A New Post</a>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
