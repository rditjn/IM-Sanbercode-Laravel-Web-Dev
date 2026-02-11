<h1>List Category</h1>
<a href="/category/create">Tambah Category</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>
            <a href="/category/{{ $category->id }}">Detail</a>
            <a href="/category/{{ $category->id }}/edit">Edit</a>

            <form action="/category/{{ $category->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
