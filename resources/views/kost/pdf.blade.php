<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Invoice - NeedKost') }}</title>

    {{-- icon --}}
    <link rel="icon" href="{{ asset('icon/logo-needkost.ico') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- Page Content -->

<body class="font-sans antialiased text-gray-900 dark:bg-gray-800">
    <div class="flex items-center justify-end my-6 me-6 print:hidden">
        <x-secondary-button onclick="window.close()">Kembali</x-secondary-button>
        <x-primary-button class="mx-4 ms-2" onclick="window.print()">Cetak</x-primary-button>
    </div>
    <main class="flex justify-center text-center ">
        <div class="container my-6">
            <div class="max-w-2xl px-6 py-12 mx-auto mt-8 bg-white rounded-lg ">
                <div class="flex items-center mb-6 align-middle">
                    <img class="w-16 h-16 me-3 " src="{{ asset('icon/logo-needkost.png') }}" alt="">
                    <h1 class="my-4 mb-3 text-2xl font-bold">
                        NeedKost_</h1>
                </div>
                <hr class="mb-2">
                <div class="flex justify-between mb-6">
                    <h1 class="text-lg font-bold">Invoice</h1>
                    <div class="text-gray-700">
                        <div>Tanggal: {{ date('d/m/Y', strtotime($riwayat->created_at)) }}</div>
                        <div>{{ $riwayat->nomor_invoice }}</div>
                    </div>
                </div>
                <div class="mb-8">
                    <h2 class="mb-4 text-lg font-bold">Untuk :</h2>
                    <div class="mb-2 text-gray-700">{{ $riwayat->user->nama}}</div>
                    <div class="mb-2 text-gray-700">{{ $riwayat->user->no_hp}}</div>
                    <div class="text-gray-700">{{ $riwayat->user->email}}</div>
                </div>
                <table class="w-full mb-8">
                    <thead>
                        <tr>
                            <th class="font-bold text-left text-gray-700">Nama kost</th>
                            <th class="font-bold text-right text-gray-700">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left text-gray-700">{{ $riwayat->kost->nama}}</td>
                            <td class="text-right text-gray-700">{{ $riwayat->durasi}} Bulan x Rp {{ number_format($riwayat->kost->harga_per_bulan, 0, ',', '.')}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="font-bold text-left text-gray-700">Total yang dibayar</td>
                            <td class="font-bold text-right text-gray-700">Rp {{ number_format($riwayat->harga_total, 0, ',', '.')}}</td>
                        </tr>
                    </tfoot>
                </table>
                <span
                    class="inline-block mb-6 -rotate-1 transition font-semibold animate-gradient-pulse rounded-md ring-2 ring-sky-300/70 shadow-2xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 text-lg tracking-widest text-foreground sm:px-4 sm:py-3 sm:text-3xl md:text-3xl lg:text-4xl">LUNAS</span>
                <div class="mb-2 text-sm text-gray-700">Invoice ini sah dan diproses oleh komputer.</div>
                <div class="text-sm text-gray-700">Silahkan hubungi
                    <span class="font-semibold text-sky-600/80">NeedKost_</span> apabila kamu membutuhkan bantuan. </div>
            </div>
        </div>
    </main>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>
