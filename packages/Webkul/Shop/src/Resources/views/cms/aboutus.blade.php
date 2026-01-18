<x-shop::layouts>
    <x-slot:title>Hubungi Kami</x-slot:title>

    <div class="min-h-screen flex flex-col items-center justify-center space-y-12">
        <!-- Judul Halaman -->
        <h1 class="text-1xl font-bold text-gray-800">Hubungi Kami via WhatsApp</h1>

        <!-- Grid Card Kontak -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 justify-items-center w-full">
            <!-- Card Wahyu -->
            <div class="border-2 border-green-500 rounded-lg p-8 text-center shadow-lg w-64">
                <a href="https://wa.me/6285333300666" target="_blank" class="hover:scale-110 transition-transform inline-block">
                    <i class="fa-brands fa-whatsapp text-green-500 text-7xl"></i>
                    <p class="mt-2 font-semibold">Bapak Wahyu</p>
                </a>
                <p class="mt-4 text-gray-700">Hubungi kami</p>
            </div>

            <!-- Card Bapak Robi -->
            <div class="border-2 border-green-500 rounded-lg p-8 text-center shadow-lg w-64">
                <a href="https://wa.me/6285257776722" target="_blank" class="hover:scale-110 transition-transform inline-block">
                    <i class="fa-brands fa-whatsapp text-green-500 text-7xl"></i>
                    <p class="mt-2 font-semibold">Bapak Paryono</p>
                </a>
                <p class="mt-4 text-gray-700">Hubungi kami</p>
            </div>

            <a href="https://compose.mail.yahoo.com/?to=samudera_niagatehnik@yahoo.com"
           class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition flex items-center">
            <i class="fa-solid fa-envelope mr-2"></i> Email
        </a>
        </div>
    </div>
</x-shop::layouts>
