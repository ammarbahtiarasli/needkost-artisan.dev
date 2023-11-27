<x-guest-layout>
    <div
        class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="px-4 py-8 mx-auto text-center lg:py-20">
            <a href="#"
                class="inline-flex items-center justify-between px-1 py-1 text-sm transition rounded-full text-sky-700 bg-sky-100 pe-4 mb-7 dark:bg-sky-900 dark:text-sky-300 hover:bg-sky-300/90 dark:hover:bg-sky-800">
                <span class="text-xs bg-sky-600 rounded-full text-white px-4 py-1.5 me-3">New</span><span
                    class="text-sm font-medium">Ada kosan baru di Gegerkalong, Cek yuk!.</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                Kamu lagi nyari kosan ? di <span
                    class="inline-block -rotate-1 animate-gradient-pulse rounded-xl ring-2 ring-sky-300/70 shadow-2xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 text-lg tracking-tight text-foreground sm:px-4 sm:py-3 sm:text-3xl md:text-3xl lg:text-4xl">NeedKost</span>
                aja.</h1>
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">Here at
                Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur illum recusandae rerum ratione
                deleniti possimus minus.</p>
            <form class="w-full max-w-md mx-auto">
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 dark:text-gray-400"
                            viewBox="0 0 20 16" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </div>

                    <input type="text" id="default-email"
                        class="block w-full p-4 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg ps-10 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                        placeholder="Cari lokasi / area / tempat" required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-sky-600 hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Cari</button>
                </div>
            </form>
        </div>
        <div class="w-full h-full bg-gradient-to-b from-sky-50 to-transparent dark:from-sky-900">
        </div>
    </div>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-24">
                <section id="rekomendasi">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Rekomendasi</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Rekomendasi Kostan buat kamu.</p>
                    </div>
                    <div
                        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-3 lg:gap-x-20 lg:gap-y-24">
                        <x-card />
                        <x-card />
                        <x-card />
                    </div>
                </section>
                <section id="Kota Bandung">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Bandung</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Kostan Pilihan di Kota Bandung.</p>
                    </div>
                    <div
                        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-3 lg:gap-x-20 lg:gap-y-24">
                        <x-card />
                        <x-card />
                        <x-card />
                    </div>
                    <div class="flex justify-end mt-6 lg:mt-10">
                        <a class="relative inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-gray-200 border rounded-md ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-gray-200-foreground hover:bg-gray-200/80 group"
                            href="#"><span class="mr-6">Tampilkan lebih banyak</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                                <path
                                    d="M15.2465 5.74628L19.3752 9.87494C20.5468 11.0465 20.5468 12.946 19.3752 14.1176L15.2465 18.2463M19.7465 11.9963H3.74655"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </section>
                <section id="Kota Bandung">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Jakarta</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Kostan Pilihan di Kota Jakarta.</p>
                    </div>
                    <div
                        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-3 lg:gap-x-20 lg:gap-y-24">
                        <x-card />
                        <x-card />
                        <x-card />
                    </div>
                    <div class="flex justify-end mt-6 lg:mt-10">
                        <a class="relative inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-gray-200 border rounded-md ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-gray-200-foreground hover:bg-gray-200/80 group"
                            href="#"><span class="mr-6">Tampilkan lebih banyak</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                                <path
                                    d="M15.2465 5.74628L19.3752 9.87494C20.5468 11.0465 20.5468 12.946 19.3752 14.1176L15.2465 18.2463M19.7465 11.9963H3.74655"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>

    {{-- kota populer --}}
    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-24">
                <section id="rekomendasi">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Populer</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">Cari kost berdasarkan kota tujuan kamu.</p>
                    </div>
                    <div class="mt-8 md:flex md:-mx-4">
                        @foreach ($kotas as $kota)

                        <div class="w-full h-64 mt-8 overflow-hidden bg-center bg-cover rounded-md md:mx-4 md:mt-0 md:w-1/4"
                        style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                            <div class="flex items-center h-full bg-gray-900 bg-opacity-50">
                                <div class="max-w-xl px-10">
                                    <h2 class="text-2xl font-semibold text-white">{{ $kota->nama_kota }}</h2>
                                    <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                    <button
                                        class="flex items-center mt-4 text-sm font-medium text-white uppercase rounded hover:underline focus:outline-none">
                                        <span>Shop Now</span>
                                        <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>



    @include('layouts.footer')
</x-guest-layout>
