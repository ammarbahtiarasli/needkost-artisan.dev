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
            <a href="/kost/detail/1"
                class="relative inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md lg: bg-emerald-200/80 dark:border-none dark:text-gray-200 dark:bg-emerald-600/90 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-emerald -200-foreground hover:bg-emerald -200/80 dark:hover:bg-emerald-700/80 group">
                <span class="mr-6">Selengkapnya</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="absolute right-0 mr-4 !h-4 shrink-0 !stroke-2 duration-300 group-hover:mr-3">
                    <path
                        d="M15.2465 5.74628L19.3752 9.87494C20.5468 11.0465 20.5468 12.946 19.3752 14.1176L15.2465 18.2463M19.7465 11.9963H3.74655"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
