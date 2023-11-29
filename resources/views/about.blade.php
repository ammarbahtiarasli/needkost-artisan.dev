<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-sm font-light leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container flex">

                <a href="#"
                    class="block max-w-sm p-6  rounded-lg shadow ">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aplikasi Pencari Kos
                        No.1 di Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Cari kos yang akurat dan terpercaya kini
                        semakin mudah. Sejak didirikan pada 11 November 2015,
                        NeedKost telah berkembang hingga menjadi aplikasi pencari kos no. 1 di Indonesia
                    </p>
                </a>


                <div
                    class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[480px] w-[300px] shadow-xl">
                    <div
                        class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute">
                    </div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[440px] bg-white dark:bg-gray-800">
                        <img  src="https://img.freepik.com/free-photo/3d-view-map_23-2150471677.jpg?w=740&t=st=1701064418~exp=1701065018~hmac=21743fdb47688b4245bd86d0756f39fcea0e7759627931ca5888ca079747afa9"
                            class="dark:hidden w-[272px] h-[400px] rounded-[2.5rem]" alt="">
                        <img src="https://img.freepik.com/free-photo/3d-view-map_23-2150471677.jpg?w=740&t=st=1701064418~exp=1701065018~hmac=21743fdb47688b4245bd86d0756f39fcea0e7759627931ca5888ca079747afa9"
                            class="hidden dark:block w-[272px] h-[500px] rounded-[2.5rem]" alt="">




                    </div>
                </div>

            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1f2937" fill-opacity="1" d="M0,64L80,90.7C160,117,320,171,480,202.7C640,235,800,245,960,224C1120,203,1280,149,1360,122.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>

    @include('layouts.footer')
</x-guest-layout>
