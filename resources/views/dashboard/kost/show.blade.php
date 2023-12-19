<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail kamar kost') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Detail kamar
                        Kost</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Detail informasi mengenai kamar
                        kost</p>
                </div>
                <hr class="mb-6">
                <div class="flex justify-center mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                    <div class="w-full mb-6">
                        <img class="max-w-full mb-3 rounded-lg h-72"
                            src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="">
                        <dl
                            class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dd class="text-lg font-semibold">C03 Residence</dd>
                                <p>Jl. Kapten Abdul Hamid No 3, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115
                                </p>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Deskripsi</dt>
                                <p class="font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis, voluptatem delectus dignissimos omnis ex adipisci harum, fugit laboriosam quidem saepe natus ad dolorum ea ipsa dolores et recusandae qui.</p>
                            </div>
                            <div class="flex flex-col pt-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Harga perbulan</dt>
                                <dd class="text-lg font-semibold">Rp. 2.400.000</dd>
                            </div>
                        </dl>
                        <x-warning-button :href="route('kost.index')" class="mt-6">Kembali</x-warning-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
