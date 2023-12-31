<x-guest-layout>
    <x-slot name="header">
        <h2 class="pt-16 font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Detail Kamar Kost - ' . $kost->nama) }}
        </h2>
    </x-slot>

    <div class="container pt-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="block md:flex">
                <div class="grid grid-cols-1 gap-4 md:w-1/2">
                    <div>
                        @if ($kost->photo()->exists())
                            <img class="h-96 w-full rounded-lg aspect-[16/9] object-cover"
                                src="{{ asset('storage/' .$kost->photo()->get()->first()->photo) }}" alt="">
                        @else
                            <img class="h-96 w-full rounded-lg aspect-[16/9] object-cover"
                                src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="">
                        @endif
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        @foreach ($kost->photo()->get()->skip(1) as $photo)
                        <div>
                            <img class="h-auto max-w-full rounded-lg aspect-[16/9] object-cover"
                                src="{{  asset('storage/' .$photo->photo) }}"
                                alt="foto kamar">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-6 md:mt-0 md:w-1/2 md:ms-6">
                    <div class="container h-full p-6 bg-white rounded-lg dark:bg-gray-800">
                        <span
                            class="bg-slate-200/80 text-slate-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">{{ $kost->gender->nama }}</span>
                        <h1 class="my-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $kost->nama }}</h1>
                        <h4 class="mb-1 text-lg font-semibold text-red-500 dark:text-white">Diskon 100rb
                            <span class="text-gray-400 line-through">Rp
                                {{ number_format($kost->harga_per_bulan + 100000, 0, ',', '.') }}</span>
                        </h4>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Rp
                            {{ number_format($kost->harga_per_bulan, 0, ',', '.') }}<span class="text-lg font-medium">
                                (Bulan
                                Pertama)</span>
                        </h2>
                        <h4 class="mt-3 font-normal text-gray-800 text-md dark:text-white">
                            @if ($kost->kamar_tersedia !== 0)
                                Tersisa
                                <span class="text-red-500"> {{ $kost->kamar_tersedia . ' Kamar' }} </span>
                                <hr class="h-px mt-4 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                                <form action="{{ route('payment') }}" method="GET">
                                    <x-text-input type="text" hidden value="{{ $kost->id }}"
                                        name="id"></x-text-input>
                                    <div class="flex justify-around">
                                        <x-input-label for="tglMulaiSewa" :value="__('Pilih tanggal mulai sewa')" />
                                        <x-input-label for="waktuSewa" :value="__('Pilih jangka waktu sewa')" />
                                    </div>
                                    <div class="flex mb-6 gap-x-3">
                                        <x-text-input id="tanggalSewa" name="tanggalSewa" class="block w-1/2 mt-3"
                                            type="date" :value="old('tanggalSewa')" required autocomplete="mulai-sewa" />
                                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                        <x-select class="w-1/2 mt-3" id="waktuSewa" name="waktuSewa" required>
                                            <option value="test" selected disabled>Pilih waktu sewa</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="12">1 Tahun</option>
                                        </x-select>
                                    </div>
                                    <x-secondary-a class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80"
                                        href="https://wa.me/{{ '+62' . substr($kost->user->no_hp, 1, 13) }}"
                                        target="_blank">Chat Pemilik</x-secondary-a>
                                    <x-primary-button
                                        class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80">Ajukan
                                        Sewa</x-primary-button>
                                </form>
                                @else
                                <span class="text-red-500"> Tidak ada kamar kosong </span>
                                <hr class="h-px mt-4 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                                <form action="{{ route('payment') }}" method="GET">
                                    <x-text-input type="text" hidden value="{{ $kost->id }}"
                                        name="id"></x-text-input>
                                    <div class="flex justify-around">
                                        <x-input-label for="tglMulaiSewa" :value="__('Pilih tanggal mulai sewa')" />
                                        <x-input-label for="waktuSewa" :value="__('Pilih jangka waktu sewa')" />
                                    </div>
                                    <div class="flex mb-6 gap-x-3">
                                        <x-text-input id="tanggalSewa" name="tanggalSewa" class="block w-1/2 mt-3" disabled
                                            type="date" :value="old('tanggalSewa')" required autocomplete="mulai-sewa" />
                                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                        <x-select class="w-1/2 mt-3" id="waktuSewa" name="waktuSewa" required disabled>
                                            <option value="test" selected disabled>Pilih waktu sewa</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="12">1 Tahun</option>
                                        </x-select>
                                    </div>
                                    <x-secondary-button class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80"
                                        href="https://wa.me/{{ '+62' . substr($kost->user->no_hp, 1, 13) }}"
                                        target="_blank">Chat Pemilik</x-secondary-button>
                                    <x-secondary-button
                                        class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80" disabled>Ajukan
                                        Sewa</x-secondary-button>
                                </form>

                            @endif
                    </div>
                </div>
            </div>
            <div class="container px-6 pt-6 my-6 bg-white rounded-lg dark:bg-gray-800">
                <div class="w-full pb-3 space-y-8 lg:block lg:pb-6 top-28">
                    <div>
                        <div class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Dikelola oleh :</div>
                        <a class="flex group" href="#" target="_blank" rel="noopener noreferrer">

                            <div>
                                <h4 class="text-lg font-medium dark:text-gray-200 text-foreground">
                                    {{ $kost->user->nama }}</h4>
                                <p class="dark:text-gray-200 text-normal text-muted-foreground">Kost : {{ $kost->nama }}</p>
                            </div>
                        </a>
                    </div>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="items-center md:flex md:-mx-4">
                        <div class="max-w-full rounded-lg md:mx-4 md:mt-0">
                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Deskripsi :
                            </h2>
                            <p class="text-sm text-gray-500 md:text-base dark:text-gray-300">{{ $kost->deskripsi }}</p>
                            <h2 class="mt-2 text-lg font-semibold text-gray-900 dark:text-white">Fasilitas :
                            </h2>
                            <ul class="max-w-full mb-4 space-y-1 text-gray-500 list-inside dark:text-gray-300">
                                @if (count($kost->fasilitas()->get()) == 0)
                                    Tidak ada fasilitas tambahan
                                @else
                                    @foreach ($kost->fasilitas()->get() as $fasilitas)
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            {{ $fasilitas->nama }}
                                        </li>
                                    @endforeach

                                @endif
                            </ul>
                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Lokasi dan Lingkungan
                                sekitar :
                            </h2>
                            <p class="dark:text-gray-200">{{ $kost->alamat }}</p>
                            <div class="flex w-full">
                                <iframe class="w-full md:w-[72rem] mt-3 mb-1 rounded-lg h-96"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.57555736110766!2d107.59630983172879!3d-6.865589080023437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e7401e386d%3A0x1e382a1614103597!2sCo3%20Residence!5e0!3m2!1sid!2sid!4v1702299908132!5m2!1sid!2sid"
                                    loading="lazy"></iframe>
                            </div>
                            <p class="dark:text-gray-200">*data maps dummy</p>
                        </div>
                    </div>
                </div>
            </div>
            @if ($other->count() != 0)
                <div class="mb-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Mungkin cocok
                            dengan kamu</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Ini rekomendasi dari kami</p>
                    </div>
                    <div
                        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                        @foreach ($other as $ok)
                            <x-card>
                                <x-slot name="id">
                                    {{ $ok->id }}
                                </x-slot>
                                <x-slot name="photo">
                                    @if ($ok->photo()->exists())
                                        {{ asset('storage/' .$ok->photo()->get()->first()->photo) }}
                                    @else
                                        https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg
                                    @endif
                                </x-slot>
                                <x-slot name="jenis">
                                    {{ $ok->gender->nama }}
                                </x-slot>
                                <x-slot name="nama">
                                    {{ $ok->nama }}
                                </x-slot>
                                <x-slot name="alamat">
                                    {{ $ok->alamat }}
                                </x-slot>
                                <x-slot name="fasilitas">
                                    @if (count($ok->fasilitas()->get()) == 0)
                                        Tidak ada fasilitas tambahan
                                    @else
                                        @foreach ($ok->fasilitas()->get() as $fasilitas)
                                            {{ $fasilitas->nama }}
                                            @if ($loop->index > 2)
                                                ...
                                            @break
                                        @endif
                                        @if ($loop->last)
                                        @break
                                    @endif
                                    ,
                                @endforeach
                            @endif
                        </x-slot>
                        <x-slot name="harga">
                            Rp {{ number_format($ok->harga_per_bulan, 0, ',', '.') }}
                        </x-slot>
                        <x-slot name="url">
                            <a href="#"
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
        </div>
    @else
    @endif
</div>
</div>


@include('layouts.footer')
</x-guest-layout>
