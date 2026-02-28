<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact detail</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen p-8 font-sans">
    <div class="max-w-xl mx-auto bg-white rounded-2xl shadow-md border border-slate-200 p-6">
        <h1 class="text-2xl font-bold mb-4 text-slate-800">Details d'un contact</h1>
        <div class="space-y-3">
            <div class="flex items-center">
                <span class="font-semibold w-24">Phone:</span>
                <span class="text-slate-700">{{ $contact->phone }}</span>
            </div>
            <div class="flex items-center">
                <span class="font-semibold w-24">Editor:</span>
                <span class="text-slate-700">{{ $contact->editor->name }}</span>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('contacts.index') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Reteur à la list</a>
        </div>
    </div>
</body>
</html>