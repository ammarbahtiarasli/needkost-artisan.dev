<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informasi Profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Wajib Perbarui informasi profil.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update-after-regis') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="">
            <x-input-label for="role" :value="__('Role *')" />
            <x-select id="role" name="role" class="block w-full mt-1" autofocus :value="old('role')">
                <option selected disabled>Pilih</option>
                <option value="2">Pemilik Kost</option>
                <option value="3">Pencari Kost</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>
        <div>
            <x-input-label for="noHp" :value="__('Nomor HP *')" />
            <x-text-input id="noHp" name="noHp" type="number" class="block w-full mt-1" :value="old('no_hp')"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('noHp')" />
        </div>
        <div class="">
            <x-input-label for="gender" :value="__('Jenis Kelamin *')" />
            <x-select id="gender" name="gender" class="block w-full mt-1">
                <option selected disabled>Pilih </option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </x-select>
            <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
        </div>

        <div>
            <x-text-input id="current_password" name="current_password" type="password" value="12345678" hidden />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password Baru')" />
            <x-text-input id="password" name="password" type="password" class="block w-full mt-1"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Konfirmaasi Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button name="afterRegis">{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Tersimpan.') }}</p>
            @endif
        </div>
    </form>
</section>
