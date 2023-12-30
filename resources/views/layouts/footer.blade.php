<footer class="pt-3 bg-white dark:bg-gray-800">
    <div class="w-full max-w-screen-xl p-8 py-6 mx-auto lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                <span class="inline-block -rotate-1 animate-gradient-pulse rounded-xl ring-2 ring-sky-300/70 shadow-xl shadow-sky-300/[0.25] ml-1 bg-gradient-to-r from-background via-sky-300/10 to-background px-4 py-1.5 dark:text-gray-200 text-lg font-semibold tracking-tight text-foreground sm:px-4 sm:py-3 sm:text-2xl lg:text-3xl hover:rotate-3 hover:transition">NeedKost</span>
              </a>
              <div class="container flex mt-12">
                <img class="p-2" src="https://static-asset.mamikos.com/assets/bangul/others/get-it-on-playstore.svg?version=2.48.0" alt="Google Play">
                <img class="p-2" src="https://static-asset.mamikos.com/assets/bangul/others/get-it-on-appstore.svg?version=2.48.0" alt="App Store">
              </div>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Navigasi</h2>
                  <ul class="font-medium text-gray-500 dark:text-gray-400">
                      <li class="mb-3">
                          <a :href="route('home')" :active="request()->routeIs('home')" class="hover:underline">Beranda</a>
                      </li>
                      <li class="mb-3">
                          <a href="#rekomendasi" class="hover:underline">Sewa Kost</a>
                      </li>
                      <li class="mb-3">
                          <a :href="route('lokasi')" :active="request()->routeIs('lokasi')" class="hover:underline">Berdasarkan Lokasi</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Bantuan</h2>
                  <ul class="font-medium text-gray-500 dark:text-gray-400">
                      <li class="mb-3">
                          <a href="/about" class="hover:underline">Tentang Kami</a>
                      </li>
                      <li>
                        <a href="/help" class="hover:underline">Pusat Bantuan</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y'); }} <a href="#" class="font-semibold hover:underline">Artisan.Dev</a>. Hak cipta dilindungi.
          </span>
      </div>
    </div>
</footer>
