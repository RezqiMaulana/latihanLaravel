<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Classroom</h1>

        <div class="card p-4">
            <h5>Nama: {{ $classroom->name }}</h5>
            <h5>Level: {{ $classroom->level }}</h5>
        </div>

        <h2 class="mt-4">Students in this Classroom</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classroom->students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
