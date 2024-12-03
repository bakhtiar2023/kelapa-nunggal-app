<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'Perumahan Kelapa Nunggal' }}
        </h2>
        <p class="font-semibold text-gray-800 dark:text-gray-200 leading-tight text-sm">Platform pelaporan iuran warga untuk keamanan dan kas perumahan</p>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div> -->
            <main class="container mx-auto px-4 py-8">
    <section class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Tentang Website</h2>
      <p class="text-gray-900 dark:text-gray-100">
        Website ini dirancang untuk memudahkan warga dan pengurus Perumahan Kelapa Nunggal dalam melakukan pelaporan iuran 
        warga. Melalui platform ini, setiap warga dapat melaporkan pembayaran untuk:
      </p>
      <ul class="list-disc list-inside mt-4 text-gray-900 dark:text-gray-100">
        <li>1. Biaya Jasa Keamanan</li>
        <li>2. Kas Perumahan</li>
      </ul>
      <p class="text-gray-900 dark:text-gray-100 mt-4">
        Dengan sistem yang transparan dan terintegrasi, diharapkan semua warga dapat lebih mudah dalam melakukan pelaporan, 
        dan pengurus dapat memantau serta mengelola iuran secara efektif.
      </p>
    </section>

    <section class="mt-4">
      <div class="grid md:grid-cols-2 gap-6">
        <!-- Biaya Jasa Keamanan -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">1. Biaya Jasa Keamanan</h3>
          <p class="text-gray-900 dark:text-gray-100">
            Iuran ini digunakan untuk mendukung operasional jasa keamanan di lingkungan perumahan, termasuk gaji petugas 
            keamanan dan kebutuhan operasional lainnya.
          </p>
        </div>

        <!-- Kas Perumahan -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">2. Kas Perumahan</h3>
          <p class="text-gray-900 dark:text-gray-100">
            Kas perumahan digunakan untuk berbagai kegiatan seperti perawatan fasilitas umum, kegiatan sosial, dan 
            pengembangan lingkungan perumahan.
          </p>
        </div>
      </div>
    </section>
  </main>

  <footer class="text-gray-900 dark:text-gray-100 mt-6 py-4">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">© 2024 Perumahan Kelapa Nunggal. Semua Hak Dilindungi.</p>
    </div>
  </footer>
        </div>
    </div>
</x-app-layout>
