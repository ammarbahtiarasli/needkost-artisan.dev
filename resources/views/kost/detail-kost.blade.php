<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Detail Kamar Kost - ' . $kost->nama) }}
        </h2>
    </x-slot>

    <div class="container pt-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="flex">
                <div class="grid w-1/2 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="foto kamar">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="foto kamar">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="foto kamar">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="foto kamar">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="foto kamar">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 ms-6">
                    <div class="container h-full p-6 bg-white rounded-lg">
                        <span
                            class="bg-slate-200/80 text-slate-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">{{ $kost->gender->nama }}</span>
                        <h1 class="my-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $kost->nama }}</h1>
                        <h4 class="mb-1 text-lg font-semibold text-red-500 dark:text-white">Diskon 100rb
                            <span
                                class="text-gray-400 line-through">{{ number_format($kost->harga_per_bulan + 100000) }}</span>
                        </h4>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Rp.
                            {{ number_format($kost->harga_per_bulan, 2) }}<span class="text-lg font-medium"> (Bulan
                                Pertama)</span>
                        </h2>
                        <h4 class="mt-3 font-normal text-gray-800 text-md dark:text-white">Tersisa
                            <span class="text-red-500"> {{ $kost->kamar_tersedia . ' Kamar' }} </span>
                            <hr class="h-px mt-4 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                            <div class="flex justify-around">
                                <x-input-label for="date" :value="__('Pilih tanggal mulai sewa')" />
                                <x-input-label for="select" :value="__('Pilih jangka waktu sewa')" />
                            </div>
                            <div class="flex mb-6 gap-x-3">
                                <x-text-input id="date" class="block w-1/2 mt-3" type="date" name="date"
                                    :value="old('date')" required autocomplete="mulai sewa" />
                                <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                <x-select class="w-1/2 mt-3" required>
                                    <option value="test" selected disabled>Pilih waktu sewa</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="12">1 Tahun</option>
                                </x-select>
                            </div>
                            <x-secondary-button class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80"
                                href="https://wa.me/+628">Chat Pemilik</x-secondary-button>
                            <x-primary-a class="flex justify-center w-full h-10 p-3 mt-3 bg-sky-800/80"
                                href="/payment">Ajukan
                                Sewa</x-primary-a>
                    </div>
                </div>
            </div>
            <div class="container p-6 my-6 bg-white rounded-lg">
                <div class="w-full pb-6 space-y-8 lg:block lg:pb-12 top-28">
                    <div>
                        <div class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Dikelola oleh :</div>
                        <a class="flex group" href="#" target="_blank" rel="noopener noreferrer">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-12 h-12 duration-300 rounded-full ring-1 group-hover:ring-foreground transitions ring-foreground/10"
                                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg"
                                    alt="foto" loading="lazy" style="opacity: 1;">
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-foreground">A Ammar Bahtiar
                                </h4>
                                <p class="text-normal text-muted-foreground">C03 Residence</p>
                            </div>
                        </a>
                    </div>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="items-center md:flex md:-mx-4">
                        <div class="max-w-full rounded-lg md:mx-4 md:mt-0">
                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Deskripsi :
                            </h2>
                            <p class="text-gray-500 dark:text-gray-400">Track work across the enterprise through an
                                open, collaborative platform. Link issues across Jira and ingest data from other
                                software development tools, so your IT support and operations teams have richer
                                contextual information to rapidly respond to requests, incidents, and changes.</p>
                            <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast -
                                without the complexity of traditional ITSM solutions.Accelerate critical development
                                work, eliminate toil, and deploy changes with ease, with a complete audit trail for
                                every change.</p>
                            <h2 class="mt-2 text-lg font-semibold text-gray-900 dark:text-white">Fasilitas :
                            </h2>
                            <ul class="max-w-full mb-4 space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    Kamar Mandi dalam
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    Kasur
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    Lemari
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    WiFi
                                </li>
                            </ul>
                            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Lokasi dan Lingkungan
                                sekitar :
                            </h2>
                            <div class="">
                                <p> Jl. Kapten Abdul Hamid No 3, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115
                                </p>
                                <iframe class="w-full mt-3 mb-1 rounded-lg h-96"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.57555736110766!2d107.59630983172879!3d-6.865589080023437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e7401e386d%3A0x1e382a1614103597!2sCo3%20Residence!5e0!3m2!1sid!2sid!4v1702299908132!5m2!1sid!2sid"
                                    loading="lazy"></iframe>
                                <p>*data maps dummy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">lorem</h2>
                    <p class="text-sm dark:text-gray-300 text-muted-foreground">lorem</p>
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
                    @endfor
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
