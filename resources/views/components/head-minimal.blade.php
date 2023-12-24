<div
    class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div class="px-4 pt-8 mx-auto text-center lg:pt-16">
        {{ $title }}
        {{ $desc }}
    </div>
    <div class="container flex px-4 pb-8 mx-auto text-center lg:pb-16">
        <div class="w-1/2">
            <h4
                class="mb-6 font-semibold leading-none tracking-tight text-gray-900 text-md sm:text-lg md:text-lg lg:text-xl dark:text-white">
                Berdasarkan Provinsi :</h4>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80" :href="route('kota', 'bandung')" :active="request()->routeIs('nama-kota')">Jawa Barat</x-primary-a>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80">Jawa Tengah</x-primary-a>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80">Jawa Timur</x-primary-a>
            <x-primary-a class="my-1 sm:my-0"><span>Lainnya</span>
            </x-primary-a>
        </div>
        <div class="w-1/2">
            <h4
                class="mb-6 font-semibold leading-none tracking-tight text-gray-900 text-md sm:text-lg md:text-lg lg:text-xl dark:text-white">
                Berdasarkan Kota/Kab :</h4>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80" :href="route('kota', 'bandung')" :active="request()->routeIs('nama-kota')">Bandung</x-primary-a>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80">Semarang</x-primary-a>
            <x-primary-a class="my-1 sm:my-0 bg-sky-800/80">Surabaya</x-primary-a>
            <x-primary-a class="my-1 sm:my-0"><span>Lainnya</span>
            </x-primary-a>
        </div>
    </div>
    <div class="w-full h-full bg-gradient-to-b from-sky-50 to-transparent dark:from-sky-900">
    </div>
</div>
