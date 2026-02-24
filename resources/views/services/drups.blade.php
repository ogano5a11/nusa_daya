<x-layout>
    <x-slot:title>DRUPS & Beyond kWh - PLN Nusa Daya</x-slot>

    <section class="relative bg-pln-dark h-[450px] flex items-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="https://blog.bankmega.com/wp-content/uploads/2025/07/Taman-Langit-Pangalengan-menawarkan-pemandangan-alam-menakjubkan.jpg"
                 alt="Teknologi DRUPS"  
                 class="w-full h-full object-cover opacity-30 blur-sm">
            <div class="absolute inset-0 bg-gradient-to-r from-pln-dark via-pln-dark/90 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <nav class="flex text-sm text-pln-yellow font-semibold mb-6" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('services') }}" class="hover:text-white transition-colors">Layanan Bisnis</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-white/50 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="text-white">DRUPS & Beyond kWh</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-white leading-tight">
                    Solusi Daya Tanpa Kedip <br><span class="text-pln-primary">(Zero Downtime)</span>
                </h1>
                <p class="text-xl text-white/80 leading-relaxed">
                    Layanan kelistrikan premium berbasis teknologi DRUPS untuk memproteksi fasilitas super kritis dari kedipan listrik sedetik pun.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-6">Proteksi Total untuk Industri Vital</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Di era digital modern, gangguan listrik sekecil apa pun (flicker/kedip) dapat berakibat fatal bagi fasilitas vital seperti Rumah Sakit, Bandara, hingga Pusat Data (Data Center). Melalui lini bisnis *Beyond kWh*, PLN Nusa Daya menghadirkan teknologi DRUPS (Diesel Rotary Uninterruptible Power Supply).
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-10">
                        DRUPS adalah solusi canggih yang menggabungkan fungsi UPS mekanis bertenaga kinetik (flywheel) dengan generator diesel. Ketika sumber listrik utama PLN mengalami kedip atau padam, roda gila (flywheel) yang terus berputar akan seketika mengambil alih suplai daya tanpa jeda waktu (0 ms), sebelum akhirnya generator diesel menyala sepenuhnya.
                    </p>

                    <div class="bg-gray-50 border-l-4 border-pln-primary p-8 rounded-r-2xl mb-12">
                        <h3 class="text-xl font-bold text-pln-dark mb-4">Keunggulan Layanan DRUPS:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Zero Transfer Time:</strong> Tidak ada jeda saat perpindahan sumber listrik utama ke darurat.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Battery-Free:</strong> Ramah lingkungan dan menghemat biaya perawatan besar karena tidak menggunakan baterai kimia seperti UPS konvensional.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Voltage Conditioning:</strong> Secara otomatis menstabilkan fluktuasi tegangan agar peralatan elektronik sensitif tetap awet.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:w-1/3">
                    <div class="bg-pln-dark rounded-3xl p-8 sticky top-32 border-t-4 border-pln-yellow shadow-xl">
                        <h3 class="text-xl font-bold text-white mb-6">Layanan Lainnya</h3>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('services.amc-pembangkit') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                AMC Pembangkit
                            </a>
                            <a href="{{ route('services.transmisi-distribusi') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                Transmisi & Distribusi
                            </a>
                            <a href="{{ route('services.drups') }}" class="bg-pln-yellow text-pln-dark font-bold px-6 py-4 rounded-xl flex justify-between items-center shadow-md cursor-default">
                                DRUPS & Beyond kWh
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                            </a>
                            <a href="{{ route('services.pelanggan') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                Pelayanan Pelanggan
                            </a>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <p class="text-white/80 text-sm mb-4">Amankan fasilitas Anda dari kedipan listrik!</p>
                            <a href="#" class="block w-full text-center bg-pln-primary hover:bg-white hover:text-pln-dark text-white font-bold py-3 rounded-full transition-colors shadow-md">
                                Pesan Layanan DRUPS
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>