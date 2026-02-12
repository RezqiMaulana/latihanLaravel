<h1>Edit Student</h1>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" value="{{ $student->name }}" required maxlength="100"><br><br>

    <label for="classrooms_id">Classroom:</label>
    <select name="classrooms_id" id="classrooms_id" required>
        <option value="">Pilih Classroom</option>
        @foreach($classrooms as $classroom)
            <option value="{{ $classroom->id }}" {{ $student->classrooms_id == $classroom->id ? 'selected' : '' }}>{{ $classroom->name }}</option>
        @endforeach
    </select><br><br>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="">Pilih Gender</option>
        <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('students.index') }}">Kembali</a>
