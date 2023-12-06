<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bantuan') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-8">
                <h1
                    class="text-xl mt-4 font-extrabold leading-none tracking-tight text-gray-900 sm:text-xl md:text-2xl lg:text-2xl dark:text-white">
                    Hai, ada yang bisa dibantu?</h1>
                <div class="md:flex md:-mx-4 justify-start">
                    <div
                        class="w-full h-32 overflow-hidden hover:shadow-md transition bg-center bg-cover rounded-lg md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Penyewa Kost</h2>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-32 overflow-hidden hover:shadow-md transition bg-center bg-cover rounded-lg md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Pemilik Kost</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-10 sm:space-y-14">
                <h1
                    class="text-xl mt-8 font-semibold leading-none tracking-tight text-gray-900">
                    Paling Sering Dicari</h1>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
