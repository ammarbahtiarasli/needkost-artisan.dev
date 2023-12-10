<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Pengajuan Sewa') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="flex justify-center px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="w-full p-6 bg-white rounded-lg ">
                <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ __('Informasi Pembayaran') }}
                </h2>
                <dl class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                        <dd class="text-lg font-semibold">Ammar Bahtiar</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor HP</dt>
                        <dd class="text-lg font-semibold">+66213683289</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jenis Kelamin</dt>
                        <dd class="text-lg font-semibold">Laki-laki</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Pekerjaan</dt>
                        <dd class="text-lg font-semibold">Mahasiswa</dd>
                    </div>
                    <div class="flex flex-col pt-6">
                        <p>*Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iusto harum unde delectus aut, obcaecati doloribus amet tenetur possimus maiores esse reprehenderit cumque autem quibusdam laborum assumenda ratione distinctio recusandae!</p>
                    </div>
                </dl>

            </div>
            <div class="w-full p-6 bg-white rounded-lg ">
                <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ __('') }}
                </h2>
                <img class="h-56 max-w-full mb-3 rounded-lg"
                src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="">
                <dl class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dd class="text-xl font-semibold">C03 Residence, Cidadap , Kota Bandung.</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tanggal mulai sewa</dt>
                        <dd class="text-lg font-semibold">9 Desember 2023</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Waktu sewa</dt>
                        <dd class="text-lg font-semibold">6 Bulan</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Total Pembayaran</dt>
                        <dd class="text-lg font-semibold">Rp. 2.400.000</dd>
                    </div>
                    <x-primary-button class="flex justify-center w-full h-10 p-3 mt-4 bg-sky-800/80">Bayar sekarang</x-primary-button>
                </dl>

            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
