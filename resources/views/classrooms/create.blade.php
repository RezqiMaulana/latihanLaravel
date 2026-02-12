<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Classroom</h1>

        <form action="{{ route('classrooms.store') }}" method="POST" class="card p-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" required maxlength="100">
            </div>

            <div class="mb-3">
                <label for="level" class="form-label">Level:</label>
                <input type="text" name="level" id="level" class="form-control" required maxlength="4">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('classrooms.index') }}" class="btn btn-secondary ms-2">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
