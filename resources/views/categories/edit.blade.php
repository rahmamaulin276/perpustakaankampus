<h1>Edit Kategori</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Kategori:</label><br>
    <input type="text" name="nama_kategori" value="{{ $category->nama_kategori }}"><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi">{{ $category->deskripsi }}</textarea><br><br>

    <button type="submit">Update</button>
</form>