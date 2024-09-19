<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <div>
        <a class="btn btn-success m-3" href="{{ route('posts.create') }}">Create </a>
    </div>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($posts as $post)
    <tr>
        <th scope="row"> {{ $post->id }}</th>
        <td> {{ $post->title }}</td>
        <td>{{ \Illuminate\Support\Str::words($post->description, 3) }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
            <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.delete', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-1">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
