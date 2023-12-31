<x-guest-layout>
    <x-slot name="header">
        <h2 class="pt-16 font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 dark:bg-gray-900">
        <div
            class="grid items-center justify-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">NeedKost_</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400">"Teman setia mencarikan kosanmu, temukan kenyamanan dengan NeedKost!".</p>
                <p class="mt-4 text-gray-500 dark:text-gray-400">NeedKost memudahkanmu menemukan kosan impianmu dengan fitur pencarian yang
                    lengkap dan mudah digunakan..</p>
            </div>
            <div class="flex items-center justify-center grid-cols-1 grid-rows-1 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('icon/logo-needkost.png') }}" alt="image ammar." class="rounded-lg bg-sky-100/80">
            </div>
        </div>
    </div>
    <div class="bg-white dark:bg-gray-800">
        <div
            class="grid items-center max-w-2xl grid-cols-1 px-4 py-24 mx-auto gap-x-8 gap-y-16 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">Artisan.Dev</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Kelompok 3 tugas besar mata kuliah Pemograman Web.</p>

                <dl class="grid grid-cols-1 mt-16 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="pt-4 border-t border-gray-200 dark:border-gray-500">
                        <dt class="font-medium text-gray-900 dark:text-gray-100">Ahmad Ammar Bahtiar</dt>
                        <a href="https://github.com/ammarbahtiarasli" target="_blank"
                            class="mt-2 text-sm text-gray-500 dark:text-gray-400">github.com/ammarbahtiarasli</a>
                    </div>
                    <div class="pt-4 border-t border-gray-200 dark:border-gray-500">
                        <dt class="font-medium text-gray-900 dark:text-gray-100">Radhitya Putra Ridwan</dt>
                        <a href="https://github.com/RadhityaOben" target="_blank"
                            class="mt-2 text-sm text-gray-500 dark:text-gray-400">github.com/RadhityaOben</a>
                    </div>
                    <div class="pt-4 border-t border-gray-200 dark:border-gray-500">
                        <dt class="font-medium text-gray-900 dark:text-gray-100">Salma Salsabila</dt>
                        <a href="https://github.com/salmasalsabi" target="_blank"
                            class="mt-2 text-sm text-gray-500 dark:text-gray-400">github.com/salmasalsabi</a>
                    </div>
                    <div class="pt-4 border-t border-gray-200 dark:border-gray-500">
                        <dt class="font-medium text-gray-900 dark:text-gray-100">Muhammad Anggi Kusuma</dt>
                        <a href="https://github.com/02Anggi" target="_blank"
                            class="mt-2 text-sm text-gray-500 dark:text-gray-400">github.com/02Anggi</a>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('ammar.jpg') }}" alt="image ammar." class="bg-gray-100 rounded-lg">
                <img src="{{ asset('radit.jpg') }}" alt="Image Radhitya." class="bg-gray-100 rounded-lg">
                <img src="{{ asset('salma.jpg') }}" alt="Image Salma." class="bg-gray-100 rounded-lg">
                <img src="{{ asset('anggi.jpg') }}" alt="Image Anggi."
                    class="object-cover bg-gray-100 rounded-lg aspect-square">
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
