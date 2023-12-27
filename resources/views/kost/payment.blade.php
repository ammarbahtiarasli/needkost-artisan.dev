<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Sewa Kost Online</title>

    {{-- icon --}}
    <link rel="icon" href="{{ asset('icon/logo-needkost.ico') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen font-sans antialiased text-gray-900 bg-gray-100">

    <div class="pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden transition shadow-sm bg-yellow-200/80 dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Selesaikan Pembayaran !') }}
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow dark:bg-gray-800">
            <div class="px-4 pt-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
                    {{ __('Pengajuan Sewa') }}
                </h2>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class=" bg-grascale-y-100 dark:bg-gray-900">
        <div class="container py-6 mx-auto">
            <div class="flex justify-center px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                <div class="w-full p-6 bg-white rounded-lg">
                    <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ __('Informasi Pembayaran') }}
                    </h2>
                    <dl class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nama</dt>
                            <dd class="text-lg font-semibold">{{ $sewa['nama_user'] }}</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor HP</dt>
                            <dd class="text-lg font-semibold">{{ $sewa['no_hp'] }}</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                            <dd class="text-lg font-semibold">{{ $sewa['email'] }}</dd>
                        </div>
                        <div class="flex flex-col pt-6">
                            <p>*Pastikan data diri yang anda masukkan sudah benar. Jika ada kesalahan, pihak NeedKost_
                                tidak ikut bertanggung jawab. Tolong kontak pemilik kost jika ingin memperbaiki
                                kesalahan!</p>
                        </div>
                    </dl>
                </div>
                <div class="w-full p-6 bg-white rounded-lg ">
                    <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ __('') }}
                    </h2>
                    <img class="h-56 max-w-full mt-8 mb-3 rounded-lg"
                        src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="">
                    <dl class="max-w-full text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dd class="text-xl font-semibold">{{ $kost->nama }}</dd>
                            <p>{{ $kost->alamat . ', ' . $kost->kota->nama . ', ' . $kost->provinsi->nama }}</p>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Tanggal mulai sewa</dt>
                            <dd class="text-lg font-semibold">{{ $sewa['tanggal_mulai'] }}</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Waktu sewa</dt>
                            <dd class="text-lg font-semibold">{{ $sewa['waktu_sewa'] }} Bulan</dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Total Pembayaran</dt>
                            <dd class="text-lg font-semibold">Rp {{ number_format($sewa['harga_total'], 0, ',', '.') }}</dd>
                        </div>
                        <x-primary-button id="pay-button" class="flex justify-center w-full h-10 p-3 mt-4">Bayar
                            sekarang
                        </x-primary-button>
                    </dl>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    window.location.href = "/invoice/{{ $sewa['nomor_invoice'] }}";
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("Pembayaran Gagal!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('Kamu menutup popup sebelum menyelesaikan proses pembayaran!');
                }
            })
        });
    </script>
</body>

</html>
