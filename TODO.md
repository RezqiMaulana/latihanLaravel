# TODO List for Student and Classroom CRUD Implementation

- [x] Edit database/migrations/2026_02_12_004703_create_classrooms_table.php to add fields: id (primary key), name (varchar(100)), level (varchar(4))
- [x] Edit database/migrations/2026_02_12_004711_create_students_table.php to add fields: id (primary key), name (varchar(100)), classrooms_id (foreign key to classrooms.id), gender (enum "L", "P")
- [x] Create app/Models/Classroom.php with fillable fields and relationships
- [x] Create app/Models/Student.php with fillable fields and relationships
- [x] Create app/Http/Controllers/ClassroomController.php with CRUD methods
- [x] Create app/Http/Controllers/StudentController.php with CRUD methods
- [x] Create resources/views/classrooms/index.blade.php
- [x] Create resources/views/classrooms/create.blade.php
- [x] Create resources/views/classrooms/edit.blade.php
- [x] Create resources/views/classrooms/show.blade.php
- [x] Create resources/views/students/index.blade.php
- [x] Create resources/views/students/create.blade.php
- [x] Create resources/views/students/edit.blade.php
- [x] Create resources/views/students/show.blade.php
- [x] Edit routes/web.php to add routes for ClassroomController and StudentController
- [x] Run php artisan migrate to apply migrations
