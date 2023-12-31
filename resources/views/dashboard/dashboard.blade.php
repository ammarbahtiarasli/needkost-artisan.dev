<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session()->has('success'))
        <div class="pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden transition bg-green-200 shadow-sm dark:bg-emerald-400/80 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-white">
                        {{ __(session('success')) }}
                </div>
            </div>
        </div>
    @endif

    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Kamu masuk sebagai " .  Auth::user()->role->nama . " Kost") }}
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="flex flex-col p-6 px-0 pt-0">
            <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Dashboard</h3>
            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Semua statistik yang berhubungan dengan
                akun anda</p>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ count($kosts) }}</h4>
                <small class="block mt-4 text-sm text-muted-foreground">Kamar Kost</small>
                <x-detail-long-button :href="route('kost.index')">Detail</x-detail-long-button>
            </div>
            <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ $kotas }}</h4><small class="block mt-4 text-sm text-muted-foreground">
                    Kota</small>
                <x-detail-long-button :href="route('lokasi.index')">Detail</x-detail-long-button>
            </div>

            @if (Auth::user()->role->nama === 'Admin')
                <div class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ count($users) }}</h4>
                <small class="block mt-4 text-sm text-muted-foreground">Pengguna</small>
                <x-detail-long-button :href="route('user.index')">Detail</x-detail-long-button>
            @endif
        </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="flex flex-col p-6 px-0 pt-0">
            <h4 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Info kost</h4>
            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Semua data tentang informasi kost yang sedang disewa</p>
        </div>
        <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100">
                    <div class="container w-1/2">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kost yang sedang disewa
                        </h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua kost</p>
                    </div>
                    <div class="container flex justify-end w-1/2">
                        <form method="GET" action="{{ route('dashboard') }}">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative items-end justify-end">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-2.4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                                    class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-sky-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cari Kost ...">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($kosts as $kost)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="">
                                <div class="text-base font-semibold">{{ $kost->nama }}</div>
                                <div class="font-normal text-gray-500"></div>
                            </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $kost->gender->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kost->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                Rp {{ number_format($kost->harga_per_bulan, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="flex flex-col p-6 px-0 pt-0">
            <h4 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Info Pengguna</h4>
            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Semua data tentang informasi pengguna yang sedang menyewa kost</p>
        </div>
        <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100">
                    <div class="container w-1/2">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Pengguna yang sedang menyewa kost
                        </h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua pengguna</p>
                    </div>
                    <div class="container flex justify-end w-1/2">
                        <form method="GET" action="{{ route('user.index') }}">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative items-end justify-end">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-2.4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                                    class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-sky-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cari Pengguna ...">
                            </div>
                        </form>
                    </div>
                </div>
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No.HP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jenis Kelamin
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Orang</div>
                                            <div class="font-normal text-gray-500">Orang@gmail.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        999666111611
                                    </td>
                                    <td class="px-6 py-4">
                                        Laki-laki
                                    </td>
                                    <td class="px-6 py-4">
                                        User
                                    </td>
                                    <td class="px-6 py-4">
                                        Sewa
                                    </td>
                                </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
