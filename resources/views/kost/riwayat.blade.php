<x-guest-layout>
    <x-slot name="header">
        <h2 class="pt-16 font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Riwayat Sewa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-full">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Riwayat Sewa') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Semua riwayat sewa akun kamu.') }}
                            </p>
                        </header>
                    </section>
                    <div class="flex w-full py-3">
                        <div class="container w-full">
                            <div class="container py-3">
                                <div class="relative overflow-x-auto border dark:border-gray-700 sm:rounded-lg">
                                    @if (!$riwayat->isEmpty())
                                        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">
                                                        Nama Kost
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Lama Sewa
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Harga total
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            @foreach ($riwayat as $riwayat)
                                                <tbody>
                                                    <tr
                                                        class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $riwayat->kost->nama }}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{ $riwayat->durasi }} bulan
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            Rp
                                                            {{ number_format($riwayat->harga_total, 0, ',', '.') }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            @php
                                                                $tanggal_mulai = strtotime($riwayat->tanggal_mulai);
                                                                $durasi = $riwayat->durasi;
                                                                $endDateTime = $tanggal_mulai + $durasi * 30 * 24 * 60 * 60;
                                                                $now = time();
                                                            @endphp
                                                           @if ($tanggal_mulai > $now)
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight rounded-full text-sky-700 bg-sky-100 dark:bg-sky-700 dark:text-sky-100">
                                                                    {{ __('Belum dimulai') }}
                                                                </span>
                                                                @elseif ($endDateTime <= $now)
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                                    {{ __('Selesai') }}
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                                                    {{ __('Berlangsung') }}
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <x-primary-a href="/invoice/{{ $riwayat->nomor_invoice }}">
                                                                {{ __('Invoice') }}
                                                            </x-primary-a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach

                                        </table>
                                    @else
                                        <div class="p-6 font-semibold text-center text-rose-500">
                                            {{ __('Belum ada transaksi baru.') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
