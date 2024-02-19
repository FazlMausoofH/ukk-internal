<nav class="bg-gray-700">
    <div class="">
        <ul class="flex justify-center w-full text-xl text-white p-5">
            <li class="mr-3 hover:text-blue-600">
                <a href="{{ url('menu') }} ">Menu</a>
            </li>
            <li class="mr-3 hover:text-blue-600">
                <a href="{{ url('meja') }} ">Meja</a>
            </li>
            <li class="mr-3 hover:text-blue-600">
                <a href="{{ url('pesanan') }} ">Pesanan</a>
            </li>
            <li class="mr-3 hover:text-blue-600">
                <a href="{{ url('laporan') }} ">Laporan</a>
            </li>
            <li class="mr-3 hover:text-blue-600">
                <form action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>