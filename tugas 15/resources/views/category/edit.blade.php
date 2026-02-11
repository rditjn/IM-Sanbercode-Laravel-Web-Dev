<h1>Edit Category</h1>

<form action="/category/{{ $category->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}"><br><br>
    <textarea name="description">{{ $category->description }}</textarea><br><br>
    <button type="submit">Update</button>
</form>
