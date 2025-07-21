<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h2 class="text-blue-400 text-[50px]">hi this is Details page</h2>

<table class="min-w-full divide-y divide-gray-200 bg-white shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
            <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
            <th class="px-6 py-3 text-left text-sm font-semibold">Mobile</th>
            <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach ($name as $person)
        <tr class="hover:bg-gray-100">
            <td class="px-6 py-4 text-sm text-gray-800">{{ $person->name }}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{ $person->email }}</td>
            <td class="px-6 py-4 text-sm text-gray-800">{{ $person->mobile }}</td>
            <td class="px-6 py-4 text-sm text-gray-800">
                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                <a href="#" class="text-red-500 hover:underline">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>