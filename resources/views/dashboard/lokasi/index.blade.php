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
                            <form method="GET" action="{{ route('lokasi.index') }}">
                                <div class="relative items-end justify-end">
                                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                        <svg class="w-4 h-2.4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" name="search" value="{{ request('search')  }}"
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Cari Provinsi..">
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
                            <tbody id="result"></tbody>
                            <tbody id="no-search">
                                @foreach ($provinsi as $p)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ Str::ucfirst($p['nama']) }}
                                        </th>
                                        <td class="px-6 py-4 text-right">
                                            <x-sky-button :href=" route('lokasi.provinsi', $p->id) ">{{ __('Detail') }}</x-sky-button>
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
                    <div class="p-6">
                        {{ $provinsi->links() }}
                    </div>
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
                    @if ($kota != null)
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
                            {{ __('Pilih Provinsi terlebih dahulu.') }}
                        </div>
                    @endif
                    <div class="p-6">
                        {{-- {{ $kota->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const search = document.querySelector('form[action="{{ route('lokasi.index') }}"]');
        const result = document.getElementById('result');
        const noSearch = document.getElementById('no-search');

        search.addEventListener('input', function(event) {
            event.preventDefault();
            liveSearch();
        });

        function liveSearch() {
            const searchData = new FormData(search);
            const searchInput = searchData.get('search');

            if(searchInput.length > 0) {
                fetch(`/lokasi/table/search?search=${searchInput}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.text())
                .then(data => {
                    displayLiveSearchResults(JSON.parse(data));
                })
                .catch(error => console.log(error));
                noSearch.classList.add('hidden');
            } else {
                result.innerHTML = '';
                noSearch.classList.remove('hidden');
            }
        }

        function displayLiveSearchResults(data){
            if(!Array.isArray(data) || !data.length) {
                result.innerHTML = `
                <tr>
                <div class="p-6 font-semibold text-center text-rose-500">
                    {{ __('Data Provinsi tidak ada.') }}
                </div>
                </tr>
                `;
                return;
            }

            result.innerHTML = data.map(item => {
                return `
                <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                ${item.nama}
                </th>
                <td class="px-6 py-4 text-right">
                <x-sky-button href="/lokasi/table/${item.id}">{{ __('Detail') }}</x-sky-button>
                </td>
                </tr>
                `;
            }).join('');
        }
    </script>

</x-app-layout>
