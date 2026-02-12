<h1>Edit Buku</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}"><br><br>
    <input type="text" name="author" value="{{ $book->author }}"><br><br>
    <input type="number" name="year" value="{{ $book->year }}"><br><br>
    <button type="submit">Update</button>
</form>