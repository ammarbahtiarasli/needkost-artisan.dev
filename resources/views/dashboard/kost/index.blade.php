<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelola Kamar Kost') }}
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

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mx-3 mb-6 md:mx-0">
                <x-primary-a x-data="" :href="route('kost.create')">
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
                        <form method="GET" action="{{ route('kost.index') }}">
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
                                    placeholder="Cari Kamar ...">
                            </div>
                        </form>
                    </div>
                </div>

                @if (Auth::user()->role->nama === 'Admin')
                    @if ($kosts->count() > 0)
                        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="hidden px-16 py-3 md:table-cell">
                                        <span class="sr-only">Image</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Kost
                                    </th>
                                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                                        Pemilik Kost
                                    </th>
                                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                                        Harga perbulan
                                    </th>
                                    <th scope="col" class="hidden px-6 py-3 md:table-cell">
                                        Terakhir diubah
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
                                        <th class="hidden p-4 md:table-cell">
                                            @if ($kost->photo()->exists())
                                                <img src="{{ asset('storage/' .$kost->photo()->get()->first()->photo) }}"
                                                    class="w-16 max-w-full max-h-full rounded-lg md:w-32"
                                                    alt="image">
                                            @else
                                                <img src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg"
                                                    class="w-16 max-w-full max-h-full rounded-lg md:w-32"
                                                    alt="image">
                                            @endif
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $kost->nama }}
                                        </th>
                                        <td class="hidden px-6 py-4 md:table-cell">
                                            {{ $kost->user->nama }}
                                        </td>
                                        <td class="hidden px-6 py-4 md:table-cell">
                                            Rp {{ number_format($kost->harga_per_bulan, 0, ',', '.') }}
                                        </td>
                                        <td class="hidden px-6 py-4 md:table-cell">
                                            {{ $kost->updated_at->diffForHumans() }}
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <x-sky-button>
                                                        <div>Detail</div>
                                                        <div class="ms-1">
                                                            <svg class="w-4 h-4 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </x-sky-button>
                                                </x-slot>
                                                <x-slot name="content" class="z-50">
                                                    <x-dropdown-link :href="route('kost.show', $kost->id)">
                                                        {{ __('Lihat') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link :href="route('kost.edit', $kost->id)">
                                                        {{ __('Ubah') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link x-data=""
                                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Hapus') }}
                                                    </x-dropdown-link>
                                                    {{-- </form> --}}
                                                </x-slot>
                                            </x-dropdown>
                                        </td>
                                    </tr>
                                @endforeach
                                <x-modal name="confirm-user-deletion" focusable>
                                    <form method="post" action="{{ route('kost.destroy', $kost->id) }} class="p-6">
                                        @csrf
                                        @method('delete')
                                        <div class="container p-6">
                                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                {{ __('Apakah kamu yakin ingin menghapus kost ini?') }}
                                            </h2>
                                            <div class="flex justify-end mt-6">
                                                <x-secondary-button x-on:click="$dispatch('close')">
                                                    {{ __('Batal') }}
                                                </x-secondary-button>
                                                <x-danger-button class="ms-3">
                                                    {{ __('Hapus Kost') }}
                                                </x-danger-button>
                                            </div>
                                        </div>
                                    </form>
                                </x-modal>
                            </tbody>
                        </table>
                    @else
                        <div class="p-6 font-semibold text-center text-rose-500">
                            {{ __('Data Kamar Kost tidak ada.') }}
                        </div>
                    @endif
                @else
                    @if ($kosts->count() > 0)
                        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-16 py-3">
                                        <span class="sr-only">Image</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Kost
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga perbulan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kamar yang tersedia
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Terakhir diubah
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
                                            @if ($kost->photo()->exists())
                                                <img src="{{ asset('storage/' .$kost->photo()->get()->first()->photo) }}"
                                                    class="w-16 max-w-full max-h-full rounded-lg md:w-32"
                                                    alt="image">
                                            @else
                                                <img src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg"
                                                    class="w-16 max-w-full max-h-full rounded-lg md:w-32"
                                                    alt="image">
                                            @endif
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $kost->nama }}
                                        </th>
                                        <td class="px-6 py-4">
                                            Rp {{ number_format($kost->harga_per_bulan, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $kost->kamar_tersedia . ' Kamar' }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $kost->updated_at->diffForHumans() }}
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    <x-sky-button>
                                                        <div>Detail</div>
                                                        <div class="ms-1">
                                                            <svg class="w-4 h-4 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                    </x-sky-button>
                                                </x-slot>
                                                <x-slot name="content" class="z-50">
                                                    <x-dropdown-link :href="route('kost.show', $kost->id)">
                                                        {{ __('Lihat') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link :href="route('kost.edit', $kost->id)">
                                                        {{ __('Ubah') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link x-data=""
                                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Hapus') }}
                                                    </x-dropdown-link>
                                                    {{-- </form> --}}
                                                </x-slot>
                                            </x-dropdown>
                                        </td>
                                    </tr>
                                @endforeach
                                <x-modal name="confirm-user-deletion" focusable>
                                    <form method="post" action="{{ route('kost.destroy', $kost->id) }} class="p-6">
                                        @csrf
                                        @method('delete')
                                        <div class="container p-6">
                                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                {{ __('Apakah kamu yakin ingin menghapus kost ini?') }}
                                            </h2>
                                            <div class="flex justify-end mt-6">
                                                <x-secondary-button x-on:click="$dispatch('close')">
                                                    {{ __('Batal') }}
                                                </x-secondary-button>
                                                <x-danger-button class="ms-3">
                                                    {{ __('Hapus Kost') }}
                                                </x-danger-button>
                                            </div>
                                        </div>
                                    </form>
                                </x-modal>
                            </tbody>
                        </table>
                    @else
                        <div class="p-6 font-semibold text-center text-rose-500">
                            {{ __('Data Kamar Kost tidak ada.') }}
                        </div>
                    @endif
                @endif

                {{-- pagination --}}
                <div class="p-12">
                    {{ $kosts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
