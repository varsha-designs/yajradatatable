<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-md mx-auto bg-white shadow-md rounded-xl p-6">
    <h1 class="text-2xl font-bold mb-4 text-center text-purple-600">Edit Customer</h1>

    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" value="{{ $customer->name }}" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" value="{{ $customer->email }}" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password" placeholder="Leave blank to keep current password" class="border p-2 w-full rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Address</label>
            <input type="text" name="address" value="{{ $customer->address }}" class="border p-2 w-full rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Phone</label>
            <input type="text" name="phone" value="{{ $customer->phone }}" class="border p-2 w-full rounded">
        </div>

        <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Update</button>
        <a href="{{ route('customer.index') }}" class="ml-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back</a>
    </form>
</div>

</body>
</html>
