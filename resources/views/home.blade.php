<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Welcome to the Application</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="{{ route('users.index') }}" class="bg-blue-500 text-white p-6 rounded-lg shadow-md hover:bg-blue-600 text-center">
                <h2 class="text-xl font-semibold">Users</h2>
                <p>Manage users</p>
            </a>
            <a href="/produk" class="bg-green-500 text-white p-6 rounded-lg shadow-md hover:bg-green-600 text-center">
                <h2 class="text-xl font-semibold">Products</h2>
                <p>View products</p>
            </a>
            <a href="{{ route('categories.index') }}" class="bg-yellow-500 text-white p-6 rounded-lg shadow-md hover:bg-yellow-600 text-center">
                <h2 class="text-xl font-semibold">Categories</h2>
                <p>Manage categories</p>
            </a>
            <a href="{{ route('books.index') }}" class="bg-red-500 text-white p-6 rounded-lg shadow-md hover:bg-red-600 text-center">
                <h2 class="text-xl font-semibold">Books</h2>
                <p>Manage books</p>
            </a>
            <a href="{{ route('classrooms.index') }}" class="bg-purple-500 text-white p-6 rounded-lg shadow-md hover:bg-purple-600 text-center">
                <h2 class="text-xl font-semibold">Classrooms</h2>
                <p>Manage classrooms</p>
            </a>
            <a href="{{ route('students.index') }}" class="bg-indigo-500 text-white p-6 rounded-lg shadow-md hover:bg-indigo-600 text-center">
                <h2 class="text-xl font-semibold">Students</h2>
                <p>Manage students</p>
            </a>
        </div>
        <div class="mt-8 text-center">
            @guest
                <a href="{{ route('login') }}" class="bg-gray-500 text-white px-4 py-2 rounded mr-4 hover:bg-gray-600">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Register</a>
            @else
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</body>
</html>
