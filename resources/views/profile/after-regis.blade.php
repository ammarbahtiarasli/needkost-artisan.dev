<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-24">
        <div class="max-w-2xl mx-auto space-y-6 sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-after-regis-form')
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
