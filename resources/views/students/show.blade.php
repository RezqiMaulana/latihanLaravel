<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Student</h1>

        <div class="card p-4">
            <h5>Nama: {{ $student->name }}</h5>
            <h5>Classroom: {{ $student->classroom->name ?? 'N/A' }}</h5>
            <h5>Gender: {{ $student->gender }}</h5>
        </div>

        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
