<x-guest-layout>
    <x-head-minimal>
        <x-slot name="title">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                Kota / Kab <span
                class="inline-block -rotate-1 transition hover:rotate-3 animate-gradient-pulse rounded-xl ring-2 ring-sky-300/70 shadow-2xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 text-lg tracking-tight text-foreground sm:px-4 sm:py-3 sm:text-3xl md:text-3xl lg:text-4xl">Bandung</span> .</h1>
        </x-slot>
        <x-slot name="desc">
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">Here at
                Lorem ipsum dolor sit amet consectetur.</p>
        </x-slot>
        <x-slot name="button">
            <x-primary-a class="mx-1 bg-sky-800/80" :href="route('kota','kecamatan')" :active="request()->routeIs('nama-kota')">Cidadap</x-primary-a>
            <x-primary-a class="mx-1 bg-sky-800/80">Sukajadi</x-primary-a>
            <x-primary-a class="mx-1 bg-sky-800/80">Lembang</x-primary-a>
            <x-primary-a class="mx-1 bg-sky-800/80">Andir</x-primary-a>
        </x-slot>
    </x-head-minimal>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Lokasi / Kota Bandung') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto ">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-24">
                <section id="rekomendasi">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Bandung</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">234 Kostan di Kota Bandung.</p>
                    </div>
                    <div class="grid gap-y-3 sm:gap-10 md:gap-x-4 lg:gap-x-6 lg:gap-y-8">
                    </div>
                </section>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
