<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    @include('components.navbar');

    @if (session('error'))
        <div class="flex justify-center w-full p-5">
            <span class="text-red-500 text-2xl">
                {{ session('error') }}
            </span>
        </div>
    @endif

    <div class="p-5">
        <div class="flex justify-end mb-5">
            <a href="menu/create" class="w-auto p-3 text-white bg-blue-600 hover:bg-blue-500 rounded-md">Create Menu</a>
        </div>
        <table class="w-full">
            <tr class="bg-slate-500 text-white text-center">
                <th class="px-3 py-4">
                    No
                </th>
                <th class="px-3 py-4">
                    Name
                </th>
                <th class="px-3 py-4">
                    Price
                </th>
                <th class="px-3 py-4">
                    Created_at
                </th>
                <th class="px-3 py-4">
                    Updated_at
                </th>
                <th class="px-3 py-4">
                    Action
                </th>
            </tr>
            @foreach ($menus as $menu)
            <tr  class="bg-slate-700 text-white text-center">
                <td class="px-3 py-4">
                    {{ $no++ }}
                </td>
                <td class="px-3 py-4">
                    {{ $menu->name }}
                </td>
                <td class="px-3 py-4">
                    {{ $menu->price }}
                </td>
                <td class="px-3 py-4">
                    {{ $menu->created_at }}
                </td>
                <td class="px-3 py-4">
                    {{ $menu->updated_at }}
                </td>
                <td class="px-3 py-4 text-center">
                    <div class="flex justify-center">
                        <span class="text-blue-500 hover:underline mr-2"><a href="{{ url('menu/edit', ['id' => $menu->id]) }}">Edit</a></span>
                        <form action="{{ url('menu/delete', ['id' => $menu->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>