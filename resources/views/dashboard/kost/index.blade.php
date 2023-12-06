<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelola Kamar Kost') }}
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container mb-6">
                <x-primary-button x-data="" href="#">
                    {{ __('Tambah Kamar Kost') }}
                </x-primary-button>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Kamar Kost</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Data semua Kamar Kost</p>
                </div>
                <table class="min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="p-4">
                                <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-16 md:w-32 max-w-full max-h-full" alt="image">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C03 Residence
                            </th>
                            <td class="px-6 py-4">
                                Jl. Cisitu Lama No. 3, Bandung
                            </td>
                            <td class="px-6 py-4">
                                AC, Kamar Mandi Dalam, Wifi
                            </td>
                            <td class="px-6 py-4">
                                Rp. 1.500.000
                            </td>
                            <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                </td>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="p-4">
                                <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-16 md:w-32 max-w-full max-h-full" alt="image">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C03 Residence
                            </th>
                            <td class="px-6 py-4">
                                Jl. Cisitu Lama No. 3, Bandung
                            </td>
                            <td class="px-6 py-4">
                                AC, Kamar Mandi Dalam, Wifi
                            </td>
                            <td class="px-6 py-4">
                                Rp. 1.500.000
                            </td>
                            <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                </td>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="p-4">
                                <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-16 md:w-32 max-w-full max-h-full" alt="image">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C03 Residence
                            </th>
                            <td class="px-6 py-4">
                                Jl. Cisitu Lama No. 3, Bandung
                            </td>
                            <td class="px-6 py-4">
                                AC, Kamar Mandi Dalam, Wifi
                            </td>
                            <td class="px-6 py-4">
                                Rp. 1.500.000
                            </td>
                            <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                </td>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="p-4">
                                <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="w-16 md:w-32 max-w-full max-h-full" alt="image">
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                C03 Residence
                            </th>
                            <td class="px-6 py-4">
                                Jl. Cisitu Lama No. 3, Bandung
                            </td>
                            <td class="px-6 py-4">
                                AC, Kamar Mandi Dalam, Wifi
                            </td>
                            <td class="px-6 py-4">
                                Rp. 1.500.000
                            </td>
                            <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                </td>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-6 text-rose-500 text-center">
                    {{ __('Data Kamar Kost tidak ada.') }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
