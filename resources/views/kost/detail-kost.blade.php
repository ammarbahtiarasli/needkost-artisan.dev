<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Detail Kamar Kost - Kos Aman Jaya, Cidadap, Kota Bandung') }}
        </h2>
    </x-slot>

    <div class="container pt-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="flex">
                <div class="grid w-1/2 gap-4 ">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/101808/pexels-photo-101808.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/2 ms-6">
                    <div class="container h-full p-6 bg-white rounded-lg">
                        <span
                        class="bg-emerald-100/80 text-emerald-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-emerald-700 dark:text-gray-300">Campur</span>
                        <h1 class="my-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kos Aman Jaya,
                            Cidadap, Kota Bandung.</h1>
                        <h4 class="mb-1 text-lg font-semibold text-red-500 dark:text-white">Diskon 100rb
                            <span class="text-gray-400 line-through">Rp.500.000</span>
                        </h4>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Rp. 400,000. <span
                                class="text-lg font-medium"> (Bulan pertama)</span>
                        </h2>
                        <h4 class="mt-3 font-normal text-gray-800 text-md dark:text-white">Tersisa
                            <span class="text-red-500"> 1 Kamar</span>
                        <hr class="h-px mt-6 mb-6 bg-gray-200 border-0 dark:bg-gray-700">
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
                                <option value="test">6 Bulan</option>
                                <option value="test">1 Tahun</option>
                            </x-select>
                        </div>
                        <x-primary-a class="flex justify-center w-full h-10 p-3 mt-8 bg-sky-800/80" href="/payment">Ajukan
                            Sewa</x-primary-a>
                    </div>
                </div>
            </div>
            <div class="container p-6 my-6 bg-white rounded-lg">
                <div class="sticky self-start hidden w-full pb-6 space-y-8 lg:block lg:pb-12 top-28">
                    <div>
                        <div class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Dikelola oleh :</div>
                        <a class="flex group" href="#" target="_blank" rel="noopener noreferrer">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-12 h-12 duration-300 rounded-full ring-1 group-hover:ring-foreground transitions ring-foreground/10"
                                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg"
                                    alt="foto" loading="lazy" style="opacity: 1;">
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-foreground">A Ammar Bahtiar</h4>
                                <p class="text-normal text-muted-foreground">Kos C03 Residence</p>
                            </div>
                        </a>
                    </div>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="items-center justify-center md:flex md:-mx-4">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
