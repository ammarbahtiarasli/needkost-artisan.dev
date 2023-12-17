<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelola Pengguna') }}
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100">
                    <div class="container w-1/2">
                        <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Pengguna NeedKost
                        </h3>
                        <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua pengguna</p>
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
                                    placeholder="Cari Pengguna ..." required>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($users->count() > 0)
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
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                                alt="Jese image">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $user->nama }}</div>
                                <div class="font-normal text-gray-500">{{ $user->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->no_hp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->gender->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->role->nama }}
                        </td>
                        <td class="px-6 py-4">
                            <x-warning-button x-data=""
                                href="">{{ __('Edit') }}</x-warning-button>
                            <form action="" method="post" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <x-danger-button x-data=""
                                    onclick="confirm('Kamar Kost ini akan dihapus ?');">{{ __('Delete') }}</x-danger-button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="p-6 font-semibold text-center text-rose-500">
                    {{ __('Data Pengguna tidak ada.') }}
                </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
