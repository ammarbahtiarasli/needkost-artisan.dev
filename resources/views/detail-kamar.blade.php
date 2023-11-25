<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-sm font-light leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Beranda / Detail Kamar') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
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
                    <div class="container">

                    </div>
                </div>
            </div>
            <div class="container py-3 my-3">
                <h2>Hello world</h2>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-guest-layout>
