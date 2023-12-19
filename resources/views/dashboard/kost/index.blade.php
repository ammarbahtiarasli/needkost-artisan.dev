<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelola Kamar Kost') }}
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mb-6">
                <x-primary-a x-data="" :href="route('kost.create')" >
                    {{ __('Tambah Kamar Kost') }}
                </x-primary-a>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100">
                    <div class="container w-1/2">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kamar Kost</h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Kamar Kost</p>
                    </div>
                    <div class="container flex justify-end w-1/2">
                        <form>
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
                                <input type="search" id="default-search"
                                    class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-sky-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cari Kamar ..." required>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($kosts->count() > 0)
                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kost
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fasilitas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($kosts as $kost)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th class="p-4">
                                    <img src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg"
                                        class="w-16 max-w-full max-h-full rounded-lg md:w-32" alt="image">
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $kost->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $kost->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($kostFasilitas as $fasilitas)
                                    @if ($loop->iteration > 1)
                                        ,
                                    @endif
                                    {{ $fasilitas->fasilitas->nama }}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ number_format($kost->harga_per_bulan, 2) }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-600 transition duration-150 ease-in-out border border-transparent rounded-md bg-sky-200/80 dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                                                    <div>Detail</div>
                                                    <div class="ms-1">
                                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>
                                            <x-slot name="content" class="z-99">
                                                <x-dropdown-link :href="route('kost.show',1)">
                                                    {{ __('Lihat') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link :href="route('kost.edit',1)">
                                                    {{ __('Edit') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link :href="route('kost.destroy',1)">
                                                    {{ __('Hapus') }}
                                                </x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="p-6 font-semibold text-center text-rose-500">
                    {{ __('Data Kamar Kost tidak ada.') }}
                </div>
                @endif

                {{-- pagination --}}
                <div class="p-8">
                    {{ $kosts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
