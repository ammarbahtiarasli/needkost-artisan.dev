<x-guest-layout>
    <x-header />
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-10">
                <section>
                    <div class="mb-6">
<<<<<<< HEAD
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Rekomendasi</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Cari Kamar kost berdasarkan
                            rekomendasi needkost.</p>
=======
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
>>>>>>> 4cae21f735c5b7274c561d51632b5b52a37e9096
                    </div>
                    @if ($kost->count() == 0)
                        <div class="flex items-center justify-center w-full">
                            <p class="mt-4 text-lg text-rose-400">Tidak ada rekomendasi kamar kost.</p>
                        </div>
                    @else
                        <div
                            class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                            @foreach ($kost as $k)
                                <x-card>
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
                                        @foreach ($fasilitas as $fasilitas)
                                            @if ($fasilitas->id_kost == $k->id)
                                                @if ($loop->iteration > 1)
                                                    ,
                                                @endif
                                                {{ $fasilitas->fasilitas->nama }}
                                            @endif
                                        @endforeach
                                    </x-slot>
                                    <x-slot name="harga">
                                        Rp. {{ number_format($k->harga_per_bulan, 2) }}
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
<<<<<<< HEAD
                        @for ($i = 0; $i < 4; $i++)
                            <x-kota-card>
                                <x-slot name="nama_kota">
                                    Kost
                                </x-slot>
                            </x-kota-card>
                        @endfor
=======
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
>>>>>>> 4cae21f735c5b7274c561d51632b5b52a37e9096
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
