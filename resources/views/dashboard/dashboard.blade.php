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

    <div class="pt-0 md:pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm bg-gradient-to-r from-sky-700 to-sky-500 dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter text-white dark:text-gray-200">{{ __('Hai, selamat datang di Dashboard Needkost.') }}</h3>
                    <p class="mt-1.5 text-md text-muted-foreground text-gray-100 dark:text-gray-300">{{ __('Kamu masuk sebagai ' . Auth::user()->role->nama . ' Kost') }}</p>
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
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-2">
            <div
                class="items-center justify-center p-6 text-center text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ count($riwayat) . ' Kamar' }}</h4>
                <small class="block mt-4 text-lg text-muted-foreground">Sudah disewa</small>
            </div>
            <div
                class="items-center justify-center p-6 text-center text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">Rp {{ number_format($total, 0, ',', '.') }}</h4><small class="block mt-4 text-lg text-muted-foreground">
                    Total Pendapatan</small>
            </div>
            <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ count($kosts) }}</h4>
                <small class="block mt-4 text-sm text-muted-foreground">Kamar Kost</small>
                <x-detail-long-button :href="route('kost.index')">Lihat Daftar Kamar</x-detail-long-button>
            </div>
            <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ $kotas }}</h4><small
                    class="block mt-4 text-sm text-muted-foreground">
                    Kota</small>
                <x-detail-long-button :href="route('lokasi.index')">Lihat Daftar Kota</x-detail-long-button>
            </div>

            @if (Auth::user()->role->nama === 'Admin')
                <div
                    class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                    <h4 class="font-mono text-xl">{{ count($users) }}</h4>
                    <small class="block mt-4 text-sm text-muted-foreground">Pengguna</small>
                    <x-detail-long-button :href="route('user.index')">Lihat semua pengguna</x-detail-long-button>
                </div>
                <div
                    class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                    <h4 class="font-mono text-xl">{{ __('7') }}</h4>
                    <small class="block mt-4 text-sm text-muted-foreground">fasilitas</small>
                    <x-detail-long-button :href="route('user.index')">Detail</x-detail-long-button>
                </div>
            @endif
        </div>
    </div>
    <div class="px-4 pb-12 mx-auto md:mb-0 md:pb-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="flex p-6 text-gray-900 dark:text-gray-100">
                <div class="container">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kamar kost yang
                        sudah disewa
                    </h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data Kamar kost yang
                        sudah disewa</p>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="overflow-x-auto text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Kost
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Penyewa
                        </th>
                        <th scope="col" class="hidden px-6 py-3 md:table-cell">
                            Durasi Sewa
                        </th>
                        <th scope="col" class="hidden px-6 py-3 md:table-cell">
                            Total Harga
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $riw)
                        <tr
                            class="overflow-x-auto bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="">
                                    <div class="text-base font-semibold">{{ $riw->kost->nama }}</div>
                                    <div class="font-normal text-gray-500"></div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $riw->user->nama }}
                            </td>
                            <td class="hidden px-6 py-4 md:table-cell">
                                {{ $riw->durasi }} Bulan
                            </td>
                            <td class="hidden px-6 py-4 md:table-cell">
                                Rp {{ number_format($riw->harga_total, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
