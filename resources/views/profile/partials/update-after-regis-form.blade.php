<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informasi Profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Wajib Perbarui informasi profil.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update-after-regis') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="">
            <x-input-label for="role" :value="__('Role *')" />
            <x-select id="role" name="role" class="block w-full mt-1" autofocus :value="old('role')" required>
                <option selected disabled>Pilih</option>
                    <option value="3">Penyewa</option>
                    <option value="2">Pemilik</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>
        <div>
            <x-input-label for="noHp" :value="__('Nomor HP *')" />
            <x-text-input id="noHp" name="noHp" type="number" class="block w-full mt-1" :value="old('no_hp')" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('noHp')" />
        </div>
        <div class="">
            <x-input-label for="gender" :value="__('Jenis Kelamin *')" />
            <x-select id="gender" name="gender" class="block w-full mt-1" required>
                <option selected disabled>Pilih </option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button name="afterRegis">{{ __('Simpan') }}</x-primary-button>

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
