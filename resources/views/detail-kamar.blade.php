<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-sm font-light leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Beranda / Detail Kamar') }}
        </h2>
    </x-slot>

    <div class="container pt-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="flex">
                <div class="grid w-1/2 gap-4 ">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="container p-6 mx-6 bg-white">
                        <h2>Hello world</h2>
                    </div>
                </div>
            </div>
            <div class="container p-6 my-6 bg-white">
                <div class="sticky self-start hidden w-1/3 pb-6 space-y-8 lg:block lg:pb-12 top-28">
                    <div class="flex items-center">
                        <div class="md:hidden">
                            <button
                                class="inline-flex items-center justify-center text-sm font-medium transition-colors rounded-md ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9"
                                type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ro:"
                                data-state="closed"><svg viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 2.68945L17.5607 8.25011L16.5 9.31077L12.75 5.56077V15.7501H11.25V5.56078L7.5 9.31077L6.43934 8.25011L12 2.68945Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.5 12.0001V19.5001H19.5V12.0001H21V21.0001H3V12.0001H4.5Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg></button>
                        </div>
                        <div class="hidden md:block">
                            <div>
                                <button
                                    class="text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-3.5 lg:flex hidden rounded-sm items-center justify-between gap-x-2"
                                    id="share-button" type="button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="radix-:rr:" data-state="closed">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4">
                                        <path
                                            d="M20.25 12.75V20.25H3.75V12.75M12 3.75V15M12 3.75L16.5 8.25M12 3.75L7.5 8.25"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></path>
                                    </svg>Bagikan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4 text-muted-foreground">Dikelola oleh</div>
                        <a class="flex group" href="https://parsinta.com/@irsyadadl" target="_blank"
                            rel="noopener noreferrer">
                            <div class="flex-shrink-0 mr-4">
                                <div class="LazyLoad is-visible"><img
                                        class="w-8 h-8 duration-300 rounded-full ring-1 group-hover:ring-foreground transitions ring-foreground/10"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                        alt="foto" loading="lazy" style="opacity: 1;"></div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-foreground">A Ammar Bahtiar</h4>
                                <p class="mt-1 text-sm text-muted-foreground">Kosan Aing Banget
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</x-guest-layout>
