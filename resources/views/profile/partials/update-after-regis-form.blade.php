<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informasi Profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Wajib Perbarui informasi profil.") }}
        </p>
    </header>

    <form method="post" action="#" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="">
            <x-input-label for="provinsi" :value="__('Role *')" />
            <x-select id="provinsi" name="provinsi" class="block w-full mt-1" autofocus :value="old('role')" required>
                <option selected disabled>Pilih</option>
                    <option value="jenis">Penyewa</option>
                    <option value="jenis">Pemilik</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Nomor HP *')" />
            <x-text-input id="name" name="name" type="number" class="block w-full mt-1" :value="old('no_hp')" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div class="">
            <x-input-label for="provinsi" :value="__('Jenis Kelamin *')" />
            <x-select id="provinsi" name="provinsi" class="block w-full mt-1" required>
                <option selected disabled>Pilih </option>
                <option value="jenis">Laki-laki</option>
                <option value="jenis">Perempuan</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Tersimpan.') }}</p>
            @endif
        </div>
    </form>
</section>
