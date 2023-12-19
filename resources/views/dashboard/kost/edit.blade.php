<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Manage Kamar Kost') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Edit Data kamar Kost</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <div class="container p-8 mx-auto mt-5 bg-white dark:bg-gray-800">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" name="nama" type="text" class="block w-full mt-1" required
                            autofocus autocomplete="nama" />
                        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-input id="alamat" name="alamat" type="text" class="block w-full mt-1" required
                            autocomplete="alamat" />
                        <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <x-text-input id="deskripsi" name="deskripsi" type="text" class="block w-full mt-1" required
                            autofocus autocomplete="deskripsi" />
                        <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="kamar_kosong" :value="__('Kamar Kosong')" />
                        <x-text-input id="kamar_kosong" name="kamar_kosong" type="number" class="block w-full mt-1" required
                            autofocus autocomplete="kamar_kosong" />
                        <x-input-error class="mt-2" :messages="$errors->get('kamar_kosong')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="harga_per_bulan" :value="__('Harga Perbulan')" />
                        <x-text-input id="kamar kosong" name="harga_per_bulan" type="number" class="block w-full mt-1" required
                            autofocus autocomplete="harga_per_bulan" />
                        <x-input-error class="mt-2" :messages="$errors->get('harga_per_bulan')" />
                    </div>


                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
