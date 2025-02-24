<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Books List</h1>
        <ul class="space-y-3">
            @foreach ($books as $book)
                <li class="bg-blue-100 px-4 py-2 rounded-md shadow-sm">
                    <strong class="text-blue-800">{{ $book['title'] }}</strong> 
                    by <span class="text-gray-700">{{ $book['author'] }}</span> 
                    ({{ $book['year'] }})
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
