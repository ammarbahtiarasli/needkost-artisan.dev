<x-guest-layout>
    <x-slot name="header">
        <h2 class="pt-16 font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Invoice') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-2xl xl:max-w-3xl">
            <div class="flex justify-center px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                <div class="justify-center w-full pt-6 text-center rounded-lg bg-emerald-200 dark:bg-emerald-500/80">
                    <h2 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ __('Transaksi Berhasil !') }}
                    </h2>
                    <dl
                        class="max-w-full pb-6 text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-600">
                    </dl>
                    <div class="w-full p-6 bg-white rounded-lg dark:bg-gray-800">
                        <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-200">
                            {{ __('Invoice') }}
                        </h2>
                        <dl
                            class="max-w-full text-gray-800 divide-y divide-gray-200 dark:text-gray-800 dark:divide-gray-600">
                            <div class="flex flex-col pb-3">
                                <dd class="text-lg text-gray-500 md:text-lg dark:text-gray-400">{{ $riwayat->nomor_invoice }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama Penyewa</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">{{ $riwayat->user->nama }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor HP</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">{{ $riwayat->user->no_hp }}</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kamar Kost</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">{{ $riwayat->kost->nama}}</dd>
                                <p>{{ $riwayat->kost->alamat}}</p>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Durasi Sewa</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">{{ $riwayat->durasi }} Bulan</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Total Bayar</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">Rp {{ number_format($riwayat->harga_total, 0, ',', '.')}}</dd>
                            </div>
                        </dl>
                        <div class="flex flex-col pt-6">
                            <p class="dark:text-gray-200">
                                <span class="text-red-600">*</span> Cetak
                                <span class="font-semibold">Invoice</span> ini untuk dijadikan bukti pembayaran
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
                            <x-secondary-a :href="route('history')" class="me-1">
                                {{ __('Riwayat Sewa') }}
                            </x-secondary-a>
                            <x-primary-a href="/print/{{ $riwayat->nomor_invoice }}" target="_blank">
                                {{ __('Cetak Invoice') }}
                            </x-primary-a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
