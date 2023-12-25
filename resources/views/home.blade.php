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

                        @foreach ($kosts as $kos)
                        <x-card>
                            <x-slot name="id">
                                {{ $kos->id }}
                            </x-slot>
                            <x-slot name="jenis">
                                {{ $kos->gender->nama }}
                            </x-slot>
                            <x-slot name="nama">
                                {{ $kos->nama }}
                            </x-slot>
                            <x-slot name="alamat">
                                {{ $kos->alamat }}
                            </x-slot>
                            <x-slot name="fasilitas">
                                {{ $kos->fasilitas }}
                            </x-slot>
                            <x-slot name="harga">
                                Rp. {{ number_format($kos->harga_per_bulan, 2) }}
                            </x-slot>
                        </x-card>
                        @endforeach
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
                        <x-kota-card>
                            <x-slot name="nama_kota">
                                Kost di Jakarta
                            </x-slot>
                        </x-kota-card>
                        <x-kota-card>
                            <x-slot name="nama_kota">
                                Kost di Bandung
                            </x-slot>
                        </x-kota-card>
                        <x-kota-card>
                            <x-slot name="nama_kota">
                                Kost di Surabaya
                            </x-slot>
                        </x-kota-card>
                        <x-kota-card>
                            <x-slot name="nama_kota">
                                Kost di Semarang
                            </x-slot>
                        </x-kota-card>
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
