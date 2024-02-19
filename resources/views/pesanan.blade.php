<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800">

    @include('components.navbar');

    @if (session('error'))
        <div class="flex justify-center w-full p-5">
            <span class="text-red-500 text-2xl">
                {{ session('error') }}
            </span>
        </div>
    @endif

    <form action="{{ route('create-pesanan') }}" method="post" class="">
        @csrf
        <div class="max-w-7xl mx-auto p-5">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($menus as $menu)
                <div>
                    <label for="text" class="text-white text-xl">{{ $menu->name }} [{{ $menu->price }}]</label>
                    <input type="number" name="{{ $menu->name }}" class="w-14 p-2 mt-1 bg-slate-600 text-white">
                </div>
                @endforeach
            </div>
            <div class="flex justify-end">
                <button type="submit" class="w-full text-white bg-blue-500 p-3 rounded-md mt-3 hover:bg-blue-400">Pesan</button>
            </div>
        </div>
    </form>
    
</body>
</html>