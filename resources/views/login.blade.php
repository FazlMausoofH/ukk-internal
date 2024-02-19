<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <form action="{{ route('login') }}" method="post" class="max-w-md mx-auto mt-56 bg-slate-800 rounded-md p-4">
        @csrf
        @if(session('error'))
            <span class="text-2xl text-red-500">
                {{ session('error') }}
            </span>
        @endif
        <div class="flex justify-center mb-1">
            <h2 class="text-4xl text-white ">Sign In</h2>
        </div>
        <div class="mt-3">
            <label for="email" class="text-white text-xl">Email</label><br>
            <input type="email" name="email" class="w-full p-2 mt-1" required>
        </div>
        <div class="mt-3">
            <label for="password" class="text-white text-xl mb-2">Password</label><br>
            <input type="password" name="password" class="w-full p-2 mt-1" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="w-auto text-white bg-blue-500 p-3 rounded-md mt-3 hover:bg-blue-400">Login</button>
        </div>
    </form>
    
</body>
</html