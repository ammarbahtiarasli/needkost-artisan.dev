<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-4 mx-auto lg:py-12 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">700</h4><small class="block mt-6 text-sm text-muted-foreground">Kamar Kost</small>
                <x-detail-long-button :href="route('kosts')">Detail</x-detail-long-button>
            </div>
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">69</h4><small class="block mt-6 text-sm text-muted-foreground">Lokasi Kota</small>
                <x-detail-long-button href="">Detail</x-detail-long-button>
            </div>
            <div
                class="p-8 text-gray-900 bg-white border rounded-lg shadow-sm dark:text-gray-200 dark:border-0 dark:bg-gray-800">
                <h4 class="font-mono text-xl">0</h4><small class="block mt-6 text-sm text-muted-foreground">Pengguna</small>
                <x-detail-long-button href="">Detail</x-detail-long-button>
            </div>
        </div>
    </div>
</x-app-layout>
