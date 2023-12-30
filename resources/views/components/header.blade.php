<div
        class="bg-white py-6 pt-12 dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="px-4 py-8 mx-auto text-center lg:py-20">
            <a href="{{ route('kosts.index') }}"
                class="inline-flex items-center justify-between px-1 py-1 text-sm transition rounded-full text-sky-700 bg-sky-100 pe-4 mb-7 dark:bg-sky-900 dark:text-sky-300 hover:bg-gray-300/80 dark:hover:bg-sky-800">
                <span class="text-xs dark:bg-emerald-500/80 bg-sky-700/80 rounded-full text-gray-100 px-4 py-1.5 me-3">Info Baru</span><span
                    class="text-sm font-medium">Ada kosan baru, Cek yuk!.</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                Kamu lagi nyari kosan ? di <span
                    class="inline-block -rotate-1 transition hover:rotate-3 animate-gradient-pulse rounded-xl ring-2 ring-sky-300/70 shadow-2xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 text-lg tracking-tight text-foreground sm:px-4 sm:py-3 sm:text-3xl md:text-3xl lg:text-4xl">NeedKost</span>
                aja.</h1>
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">
                Pilihan buat yang mencari tempat tinggal yang nggak hanya sekadar tempat tidur, tapi juga sebagai tempat yang bisa menunjang kegiatan kalian.</p>
            <form class="w-full max-w-md mx-auto">
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="default-email"
                        class="block w-full p-4 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg ps-10 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                        placeholder="Cari Lokasi ..." required autocomplete="off">
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-sky-800/80 hover:bg-sky-700/80 transition focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Cari</button>
                </div>
            </form>
        </div>
        <div class="w-full h-full bg-gradient-to-b from-sky-50 to-transparent dark:from-sky-900">
        </div>
    </div>
