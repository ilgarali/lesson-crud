<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<form method="post" action="{{ route('posts.update', $post->id) }}">
    @method('PUT')
    @csrf
    <div>
        <input name="title" placeholder="Title" value="{{ $post->title }}" class="form-control" />
    </div>
    <div class="my-2">
        <select class="form-control" name="category_id">
            <option>
                Select
            </option>
            @foreach($categories as $category)
                <option
                    @if($post->category_id === $category->id)
                      selected
                    @endif
                    value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <textarea name="description" class="form-control">{{ $post->description }}</textarea>
    </div>
    <button class="btn btn-primary m-2" type="submit">
        Update Post
    </button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
