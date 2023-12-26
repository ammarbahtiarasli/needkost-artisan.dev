<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Rekomendasi Kamar Kost') }}
        </h2>
    </x-slot>
    <x-head-minimal>
        <x-slot name="title">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                Cari kamar kost sesuai lokasi kamu.</h1>
        </x-slot>
        <x-slot name="desc">
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">Here at
                Lorem ipsum dolor sit amet consectetur adipisicing elit.consecteturs.</p>
        </x-slot>
    </x-head-minimal>

    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-6">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">lorem</h2>
                    <p class="text-sm dark:text-gray-300 text-muted-foreground">lorem</p>
                </div>
                <div
                    class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                    @for ($i = 0; $i < 3; $i++)
                    <x-card>
                        <x-slot name="photo">
                            https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg
                        </x-slot>
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
                        <x-slot name="url">

                        </x-slot>
                    </x-card>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
