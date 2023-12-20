<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Ubah Kamar Kost') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter dark:text-gray-200">Informasi Kamar
                        Kost</h3>
                    <p class="mt-1.5 text-sm text-muted-foreground dark:text-gray-300">Pastikan informasi kamar kost
                        sesuai dan tidak melanggar kebijakan.</p>
                </div>
            </div>

            <div class="container p-8 mx-auto mt-5 bg-white sm:rounded-lg dark:bg-gray-800">
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="nama" :value="__('Kamar Kost*')" />
                            <x-text-input id="nama" name="nama" type="text" class="block w-full mt-1"
                                required autofocus autocomplete="nama" placeholder="C03 Residence" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text"
                                class="block w-full mt-1 bg-gray-200/80" disabled autocomplete="slug"
                                placeholder="c03-residence" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi*')" />
                        <x-textarea-input id="deskripsi" name="deskripsi" type="textarea" class="block w-full mt-1"
                            required autocomplete="deskripsi" placeholder="Deskripsikan kamar kost kamu" />
                        <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="kota" :value="__('Kota*')" />
                            <x-select id="kota" name="kota" class="block w-full mt-1">
                                <option value="Pilih kota" selected disabled>Pilih Kota</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Kajarta">Kajarta</option>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="alamat" :value="__('Kecamatan*')" />
                            <x-select id="kota" name="kota" class="block w-full mt-1">
                                <option value="Pilih Kecamatan" selected disabled>Pilih Kecamatan</option>
                                <option value="Cidadap">Cidadap</option>
                                <option value="Sukajadi">Sukajadi</option>
                            </x-select>
                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="alamat" :value="__('Alamat*')" />
                        <x-textarea-input id="alamat" name="alamat" type="textarea" class="block w-full mt-1"
                            required autocomplete="alamat" placeholder="Jl. Kapten abdul hamid no 86" />
                        <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="kamar_tersedia" :value="__('Kamar tersedia*')" />
                            <x-text-input id="kamar_tersedia" name="kamar_tersedia" type="number"
                                class="block w-full mt-1" required autofocus autocomplete="kamar_tersedia"
                                placeholder="6 Kamar" />
                            <x-input-error class="mt-2" :messages="$errors->get('kamar_tersedia')" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="harga_perbulan" :value="__('Harga perbulan*')" />
                            <x-text-input id="harga_perbulan" name="harga_perbulan" type="number"
                                class="block w-full mt-1" required autofocus autocomplete="harga_perbulan"
                                placeholder="Rp 500,000" />
                            <x-input-error class="mt-2" :messages="$errors->get('harga_perbulan')" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi" :value="__('Jenis Kelamin*')" />
                            <input id="1" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="1"
                                class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                            <input id="2" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="2"
                                class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        <x-input-error class="mt-2" :messages="$errors->get('fasilitas')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi" :value="__('Fasilitas*')" />
                        @for ($i = 0; $i < 5; $i++)
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox"
                                class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                                Fasilitas</label>
                        @endfor
                        <x-input-error class="mt-2" :messages="$errors->get('fasilitas')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Foto Kamar*')" />
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>

                    <x-danger-button :href="route('kost.index')" class="me-1">Batal</x-danger-button>
                    <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
