<table border = "1" style="width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $cat)
        <tr>
            <td>{{ $cat->nama}}</td>
            <td>
                <a href="{{ route('categories.edit', $cat)}}">Edit</a>
                <form action="{{ route('categories.destroy', $cat->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>

        @empty
        <tr>
            <td colspan="3">Maaf data masih kosong</td>
        </tr>

        @endforelse
    </tbody>
</table>
