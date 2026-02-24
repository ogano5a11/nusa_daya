<x-layout>
    <x-slot:title>Pelayanan Pelanggan - PLN Nusa Daya</x-slot>

    <section class="relative bg-pln-dark h-[450px] flex items-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/logo-listriqu.jpg') }}"
                 alt="Pelayanan Pelanggan ListriQu"  
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
                                <span class="text-white">Pelayanan Pelanggan</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-white leading-tight">
                    Solusi Instalasi & <br><span class="text-pln-primary">Manajemen Pelanggan</span>
                </h1>
                <p class="text-xl text-white/80 leading-relaxed">
                    Hadir lebih dekat dengan masyarakat melalui layanan instalasi cepat (ListriQu) dan manajemen penagihan yang transparan.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-6">Kemudahan Akses Listrik di Genggaman Anda</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Kami mengerti bahwa urusan kelistrikan rumah tangga haruslah mudah, aman, dan transparan. Oleh karena itu, PLN Nusa Daya menyediakan manajemen pelayanan pelanggan komprehensif mulai dari hulu ke hilir untuk rumah tangga maupun bisnis retail.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-10">
                        Salah satu produk unggulan kami adalah <strong>ListriQu</strong>, sebuah inovasi layanan untuk perbaikan dan instalasi kelistrikan milik pelanggan (Instalasi Milik Pelanggan/IML) yang dikerjakan oleh teknisi bersertifikat, berstandar SLO (Sertifikat Laik Operasi), dan dengan harga yang transparan.
                    </p>

                    <div class="bg-gray-50 border-l-4 border-pln-primary p-8 rounded-r-2xl mb-12">
                        <h3 class="text-xl font-bold text-pln-dark mb-4">Cakupan Pelayanan Kami:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Layanan ListriQu:</strong> Jasa perbaikan korsleting, pemasangan instalasi baru, dan penambahan titik lampu/stop kontak di rumah pelanggan.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Cater (Cata Meter):</strong> Jasa pembacaan meteran listrik pascabayar yang akurat untuk memastikan tagihan sesuai dengan pemakaian.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Bill Management:</strong> Pengelolaan sistem tagihan, edukasi pelanggan terkait penunggakan, dan sosialisasi migrasi ke layanan prabayar (token).</span>
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
                            <a href="{{ route('services.drups') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                DRUPS & Beyond kWh
                            </a>
                            <a href="{{ route('services.pelanggan') }}" class="bg-pln-yellow text-pln-dark font-bold px-6 py-4 rounded-xl flex justify-between items-center shadow-md cursor-default">
                                Pelayanan Pelanggan
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                            </a>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <p class="text-white/80 text-sm mb-4">Butuh teknisi kelistrikan di rumah Anda?</p>
                            <a href="#" class="block w-full text-center bg-pln-primary hover:bg-white hover:text-pln-dark text-white font-bold py-3 rounded-full transition-colors shadow-md">
                                Gunakan Aplikasi ListriQu
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>