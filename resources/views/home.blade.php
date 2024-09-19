@foreach($categories as $category)
    <div>
        {{ $category->name }}
        <a href="{{ route('editCategory', $category->id) }}">Edit</a>
    </div>
@endforeach

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('storeCategory') }}">
    @csrf
    <input name="name" placeholder="Category Name">
    <br>
    <button type="submit">Create</button>
</form>
