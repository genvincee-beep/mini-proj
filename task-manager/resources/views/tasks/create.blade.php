<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Add New Task</h2>


<form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium">Task Name *</label>
                <input type="text" name="task_name" required class="w-full border p-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium">Description</label>
                <textarea name="description" rows="3" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium">Due Date</label>
                <input type="date" name="due_date" class="w-full border p-2 rounded">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('tasks.index') }}" class="text-gray-500 hover:underline">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Task</button>
            </div>
        </form>
    </div>
</body>
</html>