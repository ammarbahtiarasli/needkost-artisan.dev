<div
    class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div class="px-4 pt-8 mx-auto text-center lg:pt-16">
        {{ $title }}
        {{ $desc }}
    </div>
    <div class="container flex justify-center px-4 pb-8 mx-auto text-center lg:pb-16">
        <div class="grid grid-cols-2 w-xl gap-x-3">
            <div class="w-full">
                <x-select id="provinsi" name="provinsi" class="block w-full mt-1" required>
                    <option selected disabled>Pilih Provinsi</option>
                    @foreach (explode('#', $provin) as $provinsi)
                    @if ($provinsi == '')
                    @break
                    @endif
                    <option value="{{ $provinsi }}">{{ $provinsi }}</option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('provinsi')" />
            </div>
            <div class="w-full">
                <x-select id="provinsi" name="provinsi" class="block w-full mt-1" required>
                    <option selected disabled>Pilih Kota/Kab</option>
                    @foreach (explode('#', $kot) as $kota)
                    @if ($kota == '')
                    @break
                    @endif
                    <option value="{{ $kota }}">{{ $kota }}</option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('provinsi')" />
            </div>
        </div>
    </div>
    <div class="w-full h-full bg-gradient-to-b from-sky-50 to-transparent dark:from-sky-900">
    </div>
</div>
