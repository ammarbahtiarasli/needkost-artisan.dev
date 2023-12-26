<div class="max-w-sm transition bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:shadow-md dark:hover:shadow-md"
    {{ $attributes }}>
    <a :href="route('kost.detail')">
        <img class="rounded-t-lg" src="https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg" alt="" />
    </a>
    <div class="p-5">
        <div class="mb-3">
            <span
                class="bg-slate-200/80 text-slate-800 text-xs font-medium px-2.5 py-1 rounded-full dark:bg-slate-700 dark:text-gray-300">{{ $jenis }}</span>
        </div>
        <a href="route('kost.detail')">
            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $nama }}</h5>
        </a>
        <p class="mb-3 text-sm font-semibold text-gray-700 font-sm dark:text-gray-300 text-muted-foreground">
           {{ $alamat }}</p>
        <p class="mb-3 text-sm text-gray-700 font-sm dark:text-gray-300 text-muted-foreground">
            {{ $fasilitas }}</p>

        <div class="flex items-center justify-between">
            <span class="text-lg font-bold text-gray-900 dark:text-white">{{ $harga }}<span class="text-sm font-normal">/bulan</span></span>
            {{ $url }}
        </div>
    </div>
</div>
