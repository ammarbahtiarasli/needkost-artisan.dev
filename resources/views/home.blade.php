<x-guest-layout>
    <x-header/>
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-10">

                <section>
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Judul</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Subjudul</p>
                    </div>
                    <div
                        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                        @for ($i = 0; $i < 3; $i++)
                        <x-card>
                            <x-slot name="jenis">
                                Campur
                            </x-slot>
                            <x-slot name="nama">
                                C03 Residence
                            </x-slot>
                            <x-slot name="alamat">
                                Jl. Kapten Abdul Hamid No 3, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115
                            </x-slot>
                            <x-slot name="fasilitas">
                                AC, Wifi, Parkir Motor, Parkir Mobil, Dapur, Kamar Mandi Luar, Kamar Mandi Dalam
                            </x-slot>
                            <x-slot name="harga">
                                Rp.500.000
                            </x-slot>
                        </x-card>
                        @endfor
                    </div>
                </section>


                <div class="container flex justify-end">
                    <x-primary-a class="bg-sky-800/80" href="/nama-kota">Lihat semua</x-primary-a>
                </div>

            </div>
        </div>
    </div>

    {{-- kota populer --}}
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-8 sm:space-y-8">
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
