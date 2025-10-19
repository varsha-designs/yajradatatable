<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-md mx-auto bg-white shadow-md rounded-xl p-6">
    <h1 class="text-2xl font-bold mb-4 text-center text-purple-600">Create Customer</h1>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label>Password</label>
            <input type="password" name="password" class="border p-2 w-full rounded" required>
        </div>
        <div class="mb-4">
            <label>Address</label>
            <input type="text" name="address" class="border p-2 w-full rounded">
        </div>
        <div class="mb-4">
            <label>Phone</label>
            <input type="text" name="phone" class="border p-2 w-full rounded">
        </div>
        <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Create</button>
        <a href="{{ route('customer.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>
    </form>
</div>

</body>
</html>
