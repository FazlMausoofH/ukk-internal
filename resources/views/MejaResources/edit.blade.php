<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Meja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <form action="{{ route('edit-meja', ['id' => $meja->id ]) }}" method="post" class="max-w-md mx-auto mt-56 bg-slate-800 rounded-md p-4">
        @csrf
        @method('put')
        <div class="flex justify-center mb-1">
            <h2 class="text-4xl text-white ">Edit Meja</h2>
        </div>
        <div class="mt-3">
            <label for="name" class="text-white text-xl">Name</label><br>
            <input type="text" name="name" value="{{ $meja->name }}" class="w-full p-2 mt-1" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="w-auto text-white bg-blue-500 p-3 rounded-md mt-3 hover:bg-blue-400">Save</button>
        </div>
    </form>
    
</body>
</html