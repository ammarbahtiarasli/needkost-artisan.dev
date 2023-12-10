<x-guest-layout>
    <x-head-minimal>
        <x-slot name="title">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                Cari kamar kost sesuai lokasi kamu.</h1>
        </x-slot>
        <x-slot name="desc">
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">Here at
                Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur illum recusandae rerum ratione
                deleniti possimus minus.</p>
        </x-slot>
        <x-slot name="button">
            <x-primary-a class="bg-sky-800/80" :href="route('nama-kota')" :active="request()->routeIs('nama-kota')">Bandung</x-primary-a>
            <x-primary-a class="bg-sky-800/80">Jakarta</x-primary-a>
            <x-primary-a class="bg-sky-800/80">Surabaya</x-primary-a>
            <x-primary-a class="bg-sky-800/80">Yogyakarta</x-primary-a>
            <x-primary-a class="bg-sky-800/80">Semarang</x-primary-a>
        </x-slot>
    </x-head-minimal>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Rekomendasi Kost berdasarkan Lokasi') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-24">
            <x-sections id="rekomendasi">
                <x-slot name="judul">
                    Kost Kota Bandung
                </x-slot>
                <x-slot name="subjudul">
                    Rekomendasi Kostan buat kamu di kota Bandung.
                </x-slot>
            </x-sections>
            <x-sections id="rekomendasi">
                <x-slot name="judul">
                    Kost Kota Yogyakarta
                </x-slot>
                <x-slot name="subjudul">
                    Rekomendasi Kostan buat kamu di kota Yogyakarta.
                </x-slot>
            </x-sections>
            <x-sections id="rekomendasi">
                <x-slot name="judul">
                    Kost Kota Semarang
                </x-slot>
                <x-slot name="subjudul">
                    Rekomendasi Kostan buat kamu di kota Semarang.
                </x-slot>
            </x-sections>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
