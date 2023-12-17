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
                        semakin mudah. Sejak didirikan pada 11 November 2015,
                        NeedKost telah berkembang hingga menjadi aplikasi pencari kos no. 1 di Indonesia
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
                    <p class="font-normal text-gray-700 dark:text-gray-400">NeedKost memanfaatkan teknologi dengan
                        mengelola dan menyajikan daftar kos dengan penjelasan fasilitas secara terperinci dan dilengkapi
                        dengan foto serta detail dari setiap kos. Kami memiliki tim Mamichecker, yang tugasnya mengecek
                        dan membuat profil setiap properti. Temukan properti dengan tanda Mamichecker sebagai properti
                        yang sudah dicek oleh tim kami!
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
                    <p class="font-normal text-gray-700 dark:text-gray-400">NeesKost telah menghubungkan lebih dari 110 ribu pemilik kos dengan 6-8 juta pencari kos setiap bulannya, untuk memberikan akomodasi yang lebih baik. Inovasi yang kami lakukan bertujuan untuk memberikan kenyamanan dan kemudahan bagi penyewa dan pemilik kos.
                    </p>
                </a>
            </div>
        </div>
    </div>


    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="w-1/2">
            </div>
            <div class="w-1/2">
                <a href="#" class="block max-w-md py-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Kos Seluruh Indonesia </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Saat ini kami memiliki lebih dari 2 juta kamar kos yang tersebar di lebih dari 140 kota di seluruh Indonesia. NeedKost berusaha untuk bisa terus menyajikan data ketersediaan kamar yang akurat, agar calon penghuni mendapatkan kemudahan dalam pencarian kos.
                    </p>
                </a>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
