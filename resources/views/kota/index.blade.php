<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Rekomendasi Kost berdasarkan Kota') }}
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
                    Kost Kota Yogyakarta
                </x-slot>
                <x-slot name="subjudul">
                    Rekomendasi Kostan buat kamu di kota Yogyakarta.
                </x-slot>
            </x-sections>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
