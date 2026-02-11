<h1>Tambah Category</h1>

<form action="/category" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Category"><br><br>
    <textarea name="description" placeholder="Deskripsi"></textarea><br><br>
    <button type="submit">Simpan</button>
</form>
