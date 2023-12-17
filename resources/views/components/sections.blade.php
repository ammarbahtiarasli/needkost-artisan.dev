<section>
    <div class="mb-6">
        <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">{{ $judul }}</h2>
        <p class="text-sm dark:text-gray-300 text-muted-foreground">{{ $subjudul}}</p>
    </div>
    <div
        class="grid gap-y-12 sm:grid-cols-2 sm:gap-10 md:gap-x-4 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
        @for ($i = 0; $i < 3; $i++)
        <x-card>
            <x-slot name="jenis">
                Campur
            </x-slot>
            <x-slot name="nama">
                C03 Residence
            </x-slot>
            <x-slot name="alamat">
                Jl. Kapten Abdul Hamid No 3, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat 40115
            </x-slot>
            <x-slot name="fasilitas">
                AC, Wifi, Parkir Motor, Parkir Mobil, Dapur, Kamar Mandi Luar, Kamar Mandi Dalam
            </x-slot>
            <x-slot name="harga">
                Rp.500.000
            </x-slot>
        </x-card>
        @endfor
    </div>
</section>
