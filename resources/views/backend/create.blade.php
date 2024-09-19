<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  Create
 <form method="post" action="{{ route('posts.store') }}">
     @csrf
    <div>
        <input name="title" placeholder="Title" class="form-control" />
    </div>
     <div class="my-2">
         <select class="form-control" name="category_id">
             <option>
                 Select
             </option>
             @foreach($categories as $category)
             <option value="{{ $category->id }}">
                 {{ $category->name }}
             </option>
             @endforeach
         </select>
     </div>
     <div>
         <textarea name="description" class="form-control"></textarea>
     </div>
     <button class="btn btn-primary m-2" type="submit">
         Create Post
     </button>
 </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
