<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Invoice') }}
        </h2>
    </x-slot>

    <div class="flex justify-center px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
        <div class="w-full p-6 bg-white rounded-lg">
            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ __('Detail transaksi') }}
            </h2>
            <dl class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">No Invoice</dt>
                    <dd class="text-lg font-semibold"></dd>
                </div>
                <div class="flex flex-col pt-6">
                    <p>Pembayaran Berhasil !</p>
                </div>
            </dl>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
