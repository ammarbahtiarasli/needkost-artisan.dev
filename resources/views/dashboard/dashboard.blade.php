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
            <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ $kosts }}</h4><small class="block mt-4 text-sm text-muted-foreground">Kamar
                    Kost</small>
                <x-detail-long-button :href="route('kost.index')">Detail</x-detail-long-button>
            </div>
            <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ $kotas }}</h4><small class="block mt-4 text-sm text-muted-foreground">
                    Kota</small>
                <x-detail-long-button :href="route('lokasi.index')">Detail</x-detail-long-button>
            </div>

            @if (Auth::user()->role->nama === 'Admin')
                <div
                class="p-6 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">{{ $users }}</h4><small
                class="block mt-4 text-sm text-muted-foreground">Pengguna</small>
                <x-detail-long-button :href="route('user.index')">Detail</x-detail-long-button>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
