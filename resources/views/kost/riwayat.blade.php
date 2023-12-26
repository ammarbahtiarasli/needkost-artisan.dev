<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Riwayat Sewa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-full">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Riwayat Sewa') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Perbarui informasi profil dan alamat email akun Kamu.') }}
                            </p>
                        </header>
                    </section>
                    <div class="flex w-full py-3">
                        <div class="container w-1/3">
                            <div class="container py-3">
                                <div>
                                    <a class="flex group" href="#" target="_blank" rel="noopener noreferrer">
                                        <div class="flex-shrink-0 mr-4">
                                            <img class="w-12 h-12 duration-300 rounded-full ring-1 group-hover:ring-foreground transitions ring-foreground/10"
                                                src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg"
                                                alt="foto" loading="lazy" style="opacity: 1;">
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-medium text-foreground">A Ammar Bahtiar
                                            </h4>
                                            <p class="text-normal text-muted-foreground">Penyewa</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container w-2/3">
                            <div class="container py-3">

                                <div class="relative overflow-x-auto border sm:rounded-lg">
                                    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Nama Kost
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                     Lama Sewa
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Harga total
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    lorem
                                                </th>
                                                <td class="px-6 py-4">
                                                    lorem
                                                </td>
                                                <td class="px-6 py-4">
                                                    lorem
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                    class="bg-slate-200/80 text-slate-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">Sedang berlangsung</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr
                                                class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    lorem
                                                </th>
                                                <td class="px-6 py-4">
                                                    lorem
                                                </td>
                                                <td class="px-6 py-4">
                                                    lorem
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                    class="bg-emerald-200/80 text-slate-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">Selesai</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="p-6 font-semibold text-center text-rose-500">
                                        {{ __('Belum ada transaksi baru.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
