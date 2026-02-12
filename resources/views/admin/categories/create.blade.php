<form action="{{ route('categories.store')}}" method="POST">
    @csrf
    <input type="text", name="nama" placeholder="Nama Kategori">
    <button type="submit">Tambah</button>
</form>