<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-sm font-light leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Beranda / Kota') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-24">
                <section id="rekomendasi">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Kota Bandung</h2>
                        <p class="text-sm dark:text-gray-300 text-muted-foreground">234 Kostan di Kota Bandung.</p>
                    </div>
                    <div class="grid gap-y-3 sm:gap-10 md:gap-x-4 lg:gap-x-6 lg:gap-y-8">
                        <a href="#"
                            class="flex flex-col items-center md:flex-row md:max-w-xl dark:border-gray-700 ">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="https://picsum.photos/id/252/800/600" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="https://picsum.photos/id/252/800/400" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                            </div>
                        </a>

                    </div>
                </section>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
