<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail kamar kost' . ' - ' . $kost->nama) }}
        </h2>
    </x-slot>

    <div class="py-6 md:py-12">
        <div class="container max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-3 mb-6">
                <x-primary-a :href="route('kost.index')" class="block md:hidden">Kembali ke daftar kamar</x-primary-a>
            </div>
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 ms-2 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Detail kamar
                        Kost</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Detail informasi mengenai kamar
                        kost</p>
                </div>
                <div class="flex justify-center mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
                    <div class="w-full mx-6 mb-6 md:mx-0">
                        <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-4 sm:grid-cols-2 md:w-full">
                            @foreach ($kost->photo()->get() as $photo)
                                @if ($photo->exists())
                                    <img class="object-cover w-full h-full rounded-lg aspect-video"
                                        src="{{ asset('storage/' . $photo->photo) }}" alt="">
                                @else
                                    <img class="object-cover w-full h-full rounded-lg aspect-video"
                                        src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg"
                                        alt="">
                                @endif
                            @endforeach
                        </div>
                        <span
                            class="bg-slate-200/80 text-slate-700 text-sm font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">{{ $kost->gender->nama }}</span>
                        <dl
                            class="max-w-full mt-3 text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dd class="text-xl font-semibold dark:text-gray-200">{{ $kost->nama }}</dd>
                                <p class="dark:text-gray-200">{{ $kost->alamat }}</p>
                            </div>
                            <div class="grid grid-cols-2 gap-x-3">
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-400 md:text-lg dark:text-gray-400">Kota/Kab</dt>
                                    <p class="font-semibold dark:text-gray-200">{{ __('Bandung') }}</p>
                                </div>
                                <div class="flex flex-col py-3">
                                    <dt class="mb-1 text-gray-400 md:text-lg dark:text-gray-400">Provinsi</dt>
                                    <p class="font-semibold dark:text-gray-200">{{ __('Jawa Barat') }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-400 md:text-lg dark:text-gray-400">Deskripsi</dt>
                                <p class="text-sm md:text-normal md:font-semibold dark:text-gray-200">
                                    {{ $kost->deskripsi }}</p>
                            </div>
                            <div class="flex flex-col pt-3 mb-2">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Fasilitas</dt>
                                <dd class="text-lg font-semibold dark:text-gray-200">
                                    @foreach ($kost->fasilitas()->get() as $kos)
                                        {{ $kos->nama }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </dd>
                            </div>
                            <div class="grid grid-cols-2 mb-2 gap-x-3">
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Harga perbulan</dt>
                                    <dd class="text-lg font-semibold dark:text-gray-200">Rp.
                                        {{ number_format($kost->harga_per_bulan, 2) }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kamar yang tersedia
                                    </dt>
                                    <dd class="text-lg font-semibold dark:text-gray-200">
                                        {{ $kost->kamar_tersedia }} Kamar</dd>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 mb-2 gap-x-3">
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Di posting </dt>
                                    <dd class="text-lg font-semibold">{{ $kost->created_at->diffForhumans() }}</dd>
                                </div>
                                <div class="flex flex-col pt-3">
                                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Di perbarui </dt>
                                    <dd class="text-lg font-semibold">{{ $kost->created_at->diffForhumans() }}</dd>
                                </div>
                            </div>
                        </dl>
                        <x-primary-a :href="route('kost.index')" class="hidden mt-6 md:inline-block">Kembali ke daftar
                            kamar</x-primary-a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
