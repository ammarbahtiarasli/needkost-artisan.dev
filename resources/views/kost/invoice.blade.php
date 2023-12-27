<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Invoice') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-2xl xl:max-w-3xl">
            <div class="flex justify-center px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                <div class="justify-center w-full pt-6 text-center rounded-lg bg-emerald-200">
                    <h2 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ __('Transaksi Berhasil !') }}
                    </h2>
                    <dl
                        class="max-w-full pb-6 text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    </dl>
                    <div class="w-full p-6 bg-white rounded-lg">
                        <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ __('Invoice') }}
                        </h2>
                        <dl
                            class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dd class="text-lg text-gray-500 md:text-lg dark:text-gray-400">INV-6164783</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama Penyewa</dt>
                                <dd class="text-lg font-semibold">Ahmad Ammar Bahtiar</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor HP</dt>
                                <dd class="text-lg font-semibold">086563721356</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kamar Kost</dt>
                                <dd class="text-lg font-semibold">C03 Residence</dd>
                                <p>Jalan Kapten Abdul Hamid no 86, Kota Bandung, Jawa Barat</p>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Durasi Sewa</dt>
                                <dd class="text-lg font-semibold">6 Bulan</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Total Bayar</dt>
                                <dd class="text-lg font-semibold">Rp 2.000.000</dd>
                            </div>
                        </dl>
                        <div class="flex flex-col pt-6">
                            <p>*Cetak <span class="font-semibold">Invoice</span> ini untuk dijadikan bukti pembayaran
                                sah bila di perlukan. <br>
                                Terima kasih telah menggunakan layanan <span class="font-semibold">NeedKost_</span>.
                            </p>
                        </div>
                        <div class="container py-3 mx-auto">
                            <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                                <div class="w-full px-4">
                                    <div class="flex flex-wrap items-center justify-center">
                                        <a href="#"
                                            class="mx-3 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                            <img src="https://seeklogo.com/images/M/midtrans-logo-1D17614A16-seeklogo.com.png"
                                                alt="Midtrans" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6">
                            <x-secondary-button :href="route('history')" class="me-1">
                                {{ __('Riwayat Sewa') }}
                            </x-secondary-button>
                            <x-primary-button>
                                {{ __('Cetak Invoice') }}
                            </x-primary-button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
