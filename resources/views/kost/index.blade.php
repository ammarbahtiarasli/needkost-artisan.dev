<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold leading-tight text-gray-800 text-md dark:text-gray-200">
            {{ __('Sewa kamar Kost') }}
        </h2>
    </x-slot>

    <x-head-minimal>
        <x-slot name="title">
            <h1
                class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 sm:text-3xl md:text-3xl lg:text-4xl dark:text-white">
                <span
                    class="inline-block -rotate-1 transition hover:rotate-3 animate-gradient-pulse rounded-xl ring-2 ring-sky-300/70 shadow-2xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 text-lg tracking-tight text-foreground sm:px-4 sm:py-3 sm:text-3xl md:text-3xl lg:text-4xl">Semua</span>
                Kamar Kost.
            </h1>
        </x-slot>
        <x-slot name="desc">
            <p class="mb-8 font-normal text-gray-500 text-md lg:text-lg sm:px-16 lg:px-48 dark:text-gray-200">
                Dapatkan infonya dan langsung sewa di NeedKost.</p>
        </x-slot>
        <div class="container flex justify-center px-4 pb-8 mx-auto text-center lg:pb-16">
        </div>
    </x-head-minimal>

    <div class="pt-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="flex items-center justify-between overflow-hidden align-middle bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 mx-3 text-gray-900 md:mx-0 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Coba cara baru bayar
                        kos!</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Biar bayar kos lebih gampang dan
                        aman, coba sistem pembayaran khusus buat anak kos.</p>
                </div>
                <div class="hidden p-6 text-gray-900 md:block dark:text-gray-100">
                    <div class="w-full">
                        <div class="flex flex-wrap items-center justify-end">
                            <a href="#"
                                class="mx-4 w-[120px] py-4 opacity-60 grayscale dark:grayscale-0 dark:opacity-100 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="https://seeklogo.com/images/M/midtrans-logo-1D17614A16-seeklogo.com.png"
                                    alt="Midtrans" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-6 mx-auto">
        <div class="flex px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-6">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Semua</h2>
                    <p class="text-sm dark:text-gray-300 text-muted-foreground">kamar kost yang ada di NeedKost</p>
                </div>
                <div
                    class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                    @foreach ($kosts as $k)
                        <x-card>
                            <x-slot name="id">
                                {{ $k->id }}
                            </x-slot>
                            <x-slot name="photo">
                                @if ($k->photo()->exists())
                                    {{ asset('storage/' .$k->photo()->get()->first()->photo) }}
                                @else
                                    https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg
                                @endif
                            </x-slot>
                            <x-slot name="jenis">
                                {{ $k->gender->nama }}
                            </x-slot>
                            <x-slot name="nama">
                                {{ $k->nama }}
                            </x-slot>
                            <x-slot name="alamat">
                                {{ $k->alamat }}
                            </x-slot>
                            <x-slot name="fasilitas">
                                @if (count($k->fasilitas()->get()) == 0)
                                    Tidak ada fasilitas tambahan
                                @else
                                    @foreach ($k->fasilitas()->get() as $fasilitas)
                                        {{ $fasilitas->nama }}
                                        @if ($loop->index > 2)
                                            ...
                                        @break
                                    @endif
                                    @if ($loop->last)
                                    @break
                                @endif
                                ,
                            @endforeach
                        @endif
                    </x-slot>
                    <x-slot name="harga">
                        Rp {{ number_format($k->harga_per_bulan, 0, ',', '.') }}
                    </x-slot>
                    <x-slot name="url">
                        <a href="{{ route('kost.detail', $k->id) }}"
                            class="relative inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md lg: bg-emerald-200/80 dark:border-none dark:text-gray-200 dark:bg-emerald-600/90 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-emerald -200-foreground hover:bg-emerald -200/80 dark:hover:bg-emerald-700/80 group">
                            <span class="mr-6">Selengkapnya</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                                <path
                                    d="M15.2465 5.74628L19.3752 9.87494C20.5468 11.0465 20.5468 12.946 19.3752 14.1176L15.2465 18.2463M19.7465 11.9963H3.74655"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </x-slot>
                </x-card>
            @endforeach
        </div>
        <div class="py-6">
            {{ $kosts->links() }}
        </div>
    </div>
</div>
</div>

@include('layouts.footer')
</x-guest-layout>
