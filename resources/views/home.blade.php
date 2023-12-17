<x-guest-layout>
    <x-header/>
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-10">
                <x-sections id="rekomendasi">
                    <x-slot name="judul">
                        Rekomendasi Kost
                    </x-slot>
                    <x-slot name="subjudul">
                        Rekomendasi Kostan buat kamu.
                    </x-slot>
                </x-sections>

                <x-sections id="Kost Kota Bandung">
                    <x-slot name="judul">
                        Kost Kota Bandung
                    </x-slot>
                    <x-slot name="subjudul">
                        234 Kostan di Kota Bandung.
                    </x-slot>
                </x-sections>
                <div class="container flex justify-end">
                    <x-primary-a href="/nama-kota">Lihat semua</x-primary-a>
                </div>

                <x-sections id="Kost Kota Kajarta">
                    <x-slot name="judul">
                        Kost Kota Kajarta
                    </x-slot>
                    <x-slot name="subjudul">
                        234 Kostan di Kota Kajarta.
                    </x-slot>
                </x-sections>
                <div class="container flex justify-end">
                    <x-primary-button>Lihat semua</x-primary-button>
                </div>
            </div>
        </div>
    </div>

    {{-- kota populer --}}
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-10">
                <section id="rekomendasi">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Populer</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Cari kost berdasarkan kota tujuan
                            kamu.</p>
                    </div>
                    <div class="mt-8 mb-4 md:flex md:-mx-4">
                        @foreach ($kotas as $kota)
                            <x-kota-card>
                                <x-slot name="nama_kota">
                                   Kost {{ $kota->nama }}
                                </x-slot>
                            </x-kota-card>
                        @endforeach
                    </div>
                </section>
                <div class="container flex justify-center">
                    <x-primary-a href="/lokasi">Lihat semua kota</x-primary-a>
                </div>
            </div>
        </div>
    </div>

    <x-support/>

    @include('layouts.footer')
</x-guest-layout>
