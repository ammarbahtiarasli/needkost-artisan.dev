<x-guest-layout>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 dark:bg-gray-900">
        <div class="w-full px-6 py-6 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-gray-800 sm:rounded-lg">
            <h2 class="text-xl font-semibold leading-6 tracking-tight dark:text-gray-200">Daftar</h2>
            <p class="text-sm dark:text-gray-300 text-muted-foreground">Selamat datang di NeedKost.</p>

            <form method="POST" action="{{ route('register') }}" class="pt-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="nama" :value="__('Nama *')" />
                    <x-text-input id="nama" class="block w-full mt-1" type="text" name="nama" :value="old('nama')"
                        required autofocus autocomplete="name" placeholder="pudidi" />
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email *')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="user@needkost.id" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- No HP -->
                <div class="mt-4">
                    <x-input-label for="no_hp" :value="__('Nomor HP *')" />
                    <x-text-input id="no_hp" class="block w-full mt-1" type="number" name="no_hp"
                        :value="old('no_hp')" required autocomplete="username" placeholder="+628xxxxxx" />
                    <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                </div>

                <!-- Role -->
                <div class="mt-4">
                    <x-input-label for="role" :value="__('Daftar Sebagai *')" />
                    <x-select id="role" name="role" class="block w-full mt-1" autofocus :value="old('role')"
                        required>
                        <option selected disabled>Pilih</option>
                        <option value="3">Pencari Kost</option>
                        <option value="2">Pemilik Kost</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
                </div>

                <div class="mt-4">
                    <x-input-label for="gender" :value="__('Jenis Kelamin *')" />
                    <x-select id="gender" name="gender" class="block w-full mt-1">
                        <option selected disabled>Pilih </option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('jenis_kelamin')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password *')" />
                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="new-password"  />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                    <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}">
                        {{ __('Sudah punya akun ? Masuk') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Daftar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
