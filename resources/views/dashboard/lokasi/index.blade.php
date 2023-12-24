<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Daftar Lokasi yang tersedia') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid gap-5 sm:grid-cols-1 lg:grid-cols-2">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex p-6 text-gray-900 dark:text-gray-100">
                        <div class="container w-1/2">
                            <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Provinsi</h3>
                            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Provinsi</p>
                        </div>
                        <div class="container flex justify-end w-1/2">
                            <form>
                                <div class="relative items-end justify-end">
                                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                        <svg class="w-4 h-2.4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search"
                                        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Cari Provinsi.." required>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if (count($provinsi) > 0)
                        <table class="min-w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Provinsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provinsi as $p)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ Str::ucfirst($p['nama']) }}
                                        </th>
                                        <td class="px-6 py-4 text-right">
                                            <x-sky-button href="">{{ __('Detail') }}</x-sky-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="p-6 font-semibold text-center text-rose-500">
                            {{ __('Data Provinsi tidak ada.') }}
                        </div>
                    @endif
                </div>
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kota/Kab
                            </h3>
                            <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Kota/Kab di
                                setiap Provinsi</p>
                        </div>
                    </div>
                    @if (count($kota) > 0)
                        <table class="min-w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Kota/Kab
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kota as $k)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ Str::ucfirst($k['nama']) }}
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="p-6 font-semibold text-center text-rose-500">
                            {{ __('Data Kota/Kab tidak ada.') }}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
