<x-guest-layout>
    <x-slot name="header">
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-8">
                <h3
                    class="mt-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-xl md:text-2xl lg:text-2xl dark:text-white">
                    Hai, ada yang bisa dibantu?</h3>
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                            placeholder="Apa yang anda cari" required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Cari</button>
                    </div>
                </form>

                <div class="md:flex md:-mx-4 justify-normal">
                    <div
                        class="my-3 overflow-hidden transition bg-center bg-cover rounded-lg h-36 hover:shadow-md md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="px-10">
                                <h2 class="text-2xl font-semibold text-white">Penyewa Kost</h2>
                            </div>
                        </div>
                    </div>
                    <div
                        class="my-3 overflow-hidden transition bg-center bg-cover rounded-lg h-36 hover:shadow-md md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Pemilik Kost</h2>
                            </div>
                        </div>
                    </div>
                    <div
                        class="my-3 overflow-hidden transition bg-center bg-cover rounded-lg h-36 hover:shadow-md md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full text-center bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Pembayaran dan Tagihan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-10 sm:space-y-14">
                <h1
                    class="mt-6 text-xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-xl md:text-2xl lg:text-2xl dark:text-white">
                    Paling sering dicari</h1>
            </div>

        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
