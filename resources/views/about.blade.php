<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container w-1/2">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aplikasi Pencari Kos
                        No.1 di Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Cari kos yang akurat dan terpercaya kini
                        semakin mudah, yang di akui sebagai terbaik di Indonesia
                    </p>
                </a>
            </div>
            <div class="container justify-end w-1/2">
                <div
                    class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                    <div
                        class="h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg">
                    </div>
                    <div
                        class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg">
                    </div>
                    <div
                        class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg">
                    </div>
                    <div
                        class="h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg">
                    </div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-light.png"
                            class="dark:hidden w-[272px] h-[572px]" alt="">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-dark.png"
                            class="hidden dark:block w-[272px] h-[572px]" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="w-1/2">
            </div>

            <div class="w-1/2">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Informasi Data Kos
                        Yang Lengkap </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Hidup lebih praktis di Kost kami!Setiap kamar dilengkapi dengan tempat tidur nyaman,
                        koneksi internet cepat, dan kebersihan yang terjaga. Lokasi strategis kami memberikan akses mudah ke pusat kota dan fasilitas umum
                    </p>
                </a>
            </div>


        </div>
    </div>


    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="container w-1/2">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Penghubung Pemilik dan Pencari Kos </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Kami menghubungkan pemilik kost dengan pencari kost dalam satu platform
                        yang mudah di gunakan. Dengan berbagai pilihan dan fitur pencarian canggih. Anda dapat menemukan dan berkomunikasi
                        langsung dengan pemilik kost yang sesuai dengan preferensi anda.
                    </p>
                </a>

            </div>
            <div class="container justify-end w-1/2">
                <img class="h-29 w-29" src="https://i.ibb.co/z5WVDkq/01-CF2-C8-E-1-DB4-44-AD-8002-69759-A990-EFE.png" alt="">
            </div>
        </div>
    </div>


    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="w-1/2">
                <img class="h-5 w-5" src="https://i.pinimg.com/564x/d3/b7/c1/d3b7c10201510848f5bcf86e51b83ed6.jpg" alt="">
            </div>
            <div class="w-1/2">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Kos Seluruh Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Selamat datang di pusat informasi kost terlengkap
                        di indonesia jelajahi ribuan kost dari berbagai kota. Dengan data lengkap tentang harga, Fasilitas, dan lokasi
                        kami membantu Anda menemukan hunian ideal tanpa ribet. Mulai petualangan pencarian kost Anda sekarang dan temukan
                        kenyamanan di setiap sudut Indonesia.
                    </p>
                </a>

            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
