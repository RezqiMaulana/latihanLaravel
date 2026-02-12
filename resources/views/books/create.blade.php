<h1>Tambah Buku</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Judul"><br><br>
    <input type="text" name="author" placeholder="Penulis"><br><br>
    <input type="number" name="year" placeholder="Tahun"><br><br>
    <button type="submit">Simpan</button>
</form>