<x-guest-layout>
    <x-header />
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-10">
                <section>
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Rekomendasi</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Cari Kamar kost berdasarkan
                            rekomendasi needkost.</p>
                    </div>
                    @if ($kosts->count() == 0)
                        <div class="flex items-center justify-center w-full">
                            <p class="mt-4 text-lg text-rose-400">Tidak ada rekomendasi kamar kost.</p>
                        </div>
                    @else
                        <div
                            class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                            @foreach ($kosts as $k)
                                <x-card>
                                    <x-slot name="photo">
                                        @if ($k->photo()->exists())
                                        {{ asset('storage/' . $k->photo()->get()->first()->photo) }}
                                        @else
                                        https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg
                                        @endif
                                    </x-slot>
                                    <x-slot name="jenis">
                                        {{ $k->gender->nama }}
                                    </x-slot>
                                    <x-slot name="nama">
                                        {{ $k->nama }}
                                    </x-slot>
                                    <x-slot name="alamat">
                                        {{ $k->alamat }}
                                    </x-slot>
                                    <x-slot name="fasilitas">
                                        @foreach ($k->fasilitas()->get() as $fasilitas)
                                            {{ $fasilitas->nama }}
                                            @if ($loop->last)
                                            @break
                                        @endif
                                        ,
                                        @endforeach
                                    </x-slot>
                                    <x-slot name="harga">
                                        Rp {{ number_format($k->harga_per_bulan, 0, ',', '.') }}
                                    </x-slot>
                                    <x-slot name="url">
                                        <a href="{{ route('kost.detail', $k->id) }}"
                                            class="relative inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md lg: bg-emerald-200/80 dark:border-none dark:text-gray-200 dark:bg-emerald-600/90 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-emerald -200-foreground hover:bg-emerald -200/80 dark:hover:bg-emerald-700/80 group">
                                            <span class="mr-6">Selengkapnya</span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                                                <path
                                                    d="M15.2465 5.74628L19.3752 9.87494C20.5468 11.0465 20.5468 12.946 19.3752 14.1176L15.2465 18.2463M19.7465 11.9963H3.74655"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </x-slot>
                                </x-card>
                            @endforeach
                        </div>
                    @endif
                </section>
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
                    <a href="/lokasi/kota/bandung"
                        class="w-full h-16 mt-8 overflow-hidden transition bg-center bg-cover bg-[url('https://images.pexels.com/photos/2893670/pexels-photo-2893670.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')] rounded-lg sm:h-32 hover:shadow-md md:mx-4 md:mt-0 md:w-1/4">
                        <div class="flex items-center justify-center h-full bg-sky-800/60">
                            <div class="max-w-xl px-10">
                                <h2 class="text-xl font-semibold text-white sm:text-2xl">Kost di Bandung</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <div class="container flex justify-center">
                <x-primary-a href="/lokasi">Lihat semua kota</x-primary-a>
            </div>
        </div>
    </div>
</div>

<x-support />

@include('layouts.footer')
</x-guest-layout>
