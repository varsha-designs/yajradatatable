<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Customer List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-6xl mx-auto bg-white shadow-md rounded-xl p-6">
    <h1 class="text-2xl font-bold mb-4 text-center text-blue-600">Customer List</h1>

    <div class="flex justify-between mb-4">
        <a href="{{ route('customer.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Create Customer</a>

        <form action="{{ route('customer.import') }}" method="POST" enctype="multipart/form-data" class="flex items-center">
            @csrf
            <input type="file" name="file" class="border p-2 rounded mr-2" required>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Import Excel</button>
        </form>

        <a href="{{ route('customer.export') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Export Excel</a>
    </div>

    <table id="customerTable" class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-200">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#customerTable').DataTable({
        processing:true,
        serverSide:true,                                                          // does the script code are jquery? thats why we used jquery link on the above?
        ajax:"{{ route('customer.index') }}",
        columns:[
            {data:'DT_RowIndex',name:'DT_RowIndex', orderable:false, searchable:false},
            {data:'name', name:'name'},
            {data:'email', name:'email'},
            {data:'password', name:'password'},
            {data:'address', name:'address'},
            {data:'phone', name:'phone'},
            {data:'action', name:'action', orderable:false, searchable:false}
        ]
    });
});
</script>

</body>
</html>
