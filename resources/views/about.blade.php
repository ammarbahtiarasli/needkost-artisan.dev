<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="grid grid-cols-1 px-4 mx-auto md:grid-cols-2 sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container ">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aplikasi Pencari Kos
                        No.1 di Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Cari kos yang akurat dan terpercaya kini
                        semakin mudah, yang di akui sebagai terbaik di Indonesia
                    </p>
                </a>
            </div>
            <div class="container">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kami Hadir Untuk
                        Anda</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kami hadir untuk memudahkan anda dalam
                        mencari kos yang sesuai dengan keinginan anda
                    </p>
                </a>
            </div>

        </div>
    </div>
    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container">
                hello
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
