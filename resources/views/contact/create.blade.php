<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
    <title>Create Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen p-8 font-sans">
    <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-md border border-slate-200 p-6">
        <h1 class="text-2xl font-bold mb-4 text-slate-800">Create Contact</h1>

        <form action="{{ route('contacts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Phone</label>
                <input type="text" name="phone" class="w-full border border-slate-200 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Editor ID</label>
                <input type="text" name="editor_id" class="w-full border border-slate-200 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Create</button>
                <a href="{{ route('contacts.index') }}" class="text-sm text-slate-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
    </form>
</body>
</html>