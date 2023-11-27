<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-sm font-light leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container">

                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aplikasi Pencari Kos
                        No.1 di Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Cari kos yang akurat dan terpercaya kini
                        semakin mudah. Sejak didirikan pada 11 November 2015,
                        NeedKost telah berkembang hingga menjadi aplikasi pencari kos no. 1 di Indonesia
                    </p>
                </a>


                <div
                    class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                    <div
                        class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute">
                    </div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                        <img class="h-auto max-w-xs ms-auto" src="https://img.freepik.com/free-photo/3d-view-map_23-2150471677.jpg?w=740&t=st=1701064418~exp=1701065018~hmac=21743fdb47688b4245bd86d0756f39fcea0e7759627931ca5888ca079747afa9"
                            class="dark:hidden w-[272px] h-[572px]" alt="">
                        <img class="h-auto max-w-xs ms-auto" src="https://img.freepik.com/free-photo/3d-view-map_23-2150471677.jpg?w=740&t=st=1701064418~exp=1701065018~hmac=21743fdb47688b4245bd86d0756f39fcea0e7759627931ca5888ca079747afa9"
                            class="hidden dark:block w-[272px] h-[572px]" alt="">



                    </div>
                </div>


            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
