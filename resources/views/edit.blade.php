<form method="post" action="{{ route('updateCategory', $category->id) }}">
    @method('PUT')
    @csrf
    <input name="name" value="{{ $category->name }}" placeholder="Category Name">
    <br>
    <button type="submit">Update</button>
</form>
