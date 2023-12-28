<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bantuan') }}
        </h2>
    </x-slot>

    <div class="container py-6 mx-auto">
        <div class="px-4 mx-auto sm:px-6 md:px-4 lg:px-8 lg:max-w-6xl xl:max-w-7xl">
            <div class="space-y-10 sm:space-y-8">
                <h1
                    class="text-xl mt-4 font-extrabold leading-none tracking-tight text-gray-900 sm:text-xl md:text-2xl lg:text-2xl dark:text-white">
                    Hai, ada yang bisa dibantu?</h1>
                <div class="md:flex md:-mx-4 justify-start">
                    <div
                        class="w-full h-32 overflow-hidden hover:shadow-md transition bg-center bg-cover rounded-lg md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Penyewa Kost</h2>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full h-32 overflow-hidden hover:shadow-md transition bg-center bg-cover rounded-lg md:mx-4 md:mt-0 md:w-1/3">
                        <div class="flex items-center justify-center h-full bg-sky-800/80">
                            <div class="max-w-xl px-10 ">
                                <h2 class="text-2xl font-semibold text-white">Pemilik Kost</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{-- BATAS SUCI --}}

            <div class="space-y-10 sm:space-y-14">
                <div class="w-1/2">
                </div>
            </div>
        </div>
    </div>
    <div class="space-y-10 sm:space-y-14 mx-20">
        <div class="space-y-10 sm:space-y-14">
          <h1 class="text-4xl mt-8 font-semibold leading-none tracking-tight text-gray-900">Paling Sering Dicari</h1>
        </div>
        <div class="grid grid-cols-3 gap-5">
          <!-- Section 1: Akun Pemilik -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Akun Pemilik</h1>
                <h1 class="text-xl font-light">Lupa Password Akun Pemilik? </h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
          <!-- Section 2: Panduan Keamanan -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                  </svg>

              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Panduan Keamanan</h1>
                <h1 class="text-xl font-light">Bagaimana Transaksi Saya Aman Di NeedKost?</h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
          <!-- Section 3: Produk dan Fitur untuk Penyewa -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                  </svg>

              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Produk dan Fitur untuk
                  Penyewa</h1>
                <h1 class="text-xl font-light">Mengapa Chat Saya dengan Pemilik Kos Hilang?</h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
          <!-- Section 4: Kebijakan NeedKost -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                  </svg>

              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Kebijakan NeedKost</h1>
                <h1 class="text-xl font-light">Kebijakan Privasi NeedKost </h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
          <!-- Section 5: Akun Penyewa -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Akun Penyewa</h1>
                <h1 class="text-xl font-light">Saya Lupa Password Akun Penyewa?</h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
          <!-- Section 6: Syarat dan Ketentuan -->
          <div class="flex flex-col items-center space-y-10 sm:space-y-14 text-center w-full h-40">
            <div class="flex h-full">
              <div class="w-1/6 flex justify-center h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                  </svg>

              </div>
              <div class="w-5/6 flex flex-col gap-2 text-left ">
                <h1 class="text-md font-bold text-gray-800 hover:text-gray-400 transition-all">Syarat dan Ketentuan</h1>
                <h1 class="text-xl font-light">Syarat dan Ketentuan Umum</h1>
                <h1 class="text-sm text-gray-400 font-bold">Selengkapnya </h1>
              </div>
            </div>
          </div>
        </div>
      </div>






    @include('layouts.footer')
</x-guest-layout>
