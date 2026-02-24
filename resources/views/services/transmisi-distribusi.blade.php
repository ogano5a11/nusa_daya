<x-layout>
    <x-slot:title>Transmisi & Distribusi - PLN Nusa Daya</x-slot>

    <section class="relative bg-pln-dark h-[450px] flex items-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/gambar-services-transmisi.jpeg') }}"
                 alt="Jaringan Transmisi PLN"  
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
                                <span class="text-white">Transmisi & Distribusi</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-white leading-tight">
                    Layanan Keandalan <br><span class="text-pln-primary">Transmisi & Distribusi</span>
                </h1>
                <p class="text-xl text-white/80 leading-relaxed">
                    Memastikan urat nadi kelistrikan berfungsi optimal, mulai dari Gardu Induk hingga ke jaringan distribusi pelanggan tanpa gangguan.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-6">Menjaga Urat Nadi Kelistrikan Nasional</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Energi yang dihasilkan oleh pembangkit tidak akan bermakna tanpa sistem penyaluran yang handal. PT PLN Nusa Daya menghadirkan layanan menyeluruh untuk operasi dan pemeliharaan (O&M) aset Transmisi dan Distribusi, guna memastikan listrik sampai ke masyarakat dengan kualitas tegangan yang standar dan bebas kedip.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-10">
                        Didukung oleh tim Pelayanan Teknik (Yantek) yang responsif dan dilengkapi peralatan mutakhir, kami siap menangani pemeliharaan preventif maupun korektif di berbagai medan, baik perkotaan hingga pelosok kepulauan.
                    </p>

                    <div class="bg-gray-50 border-l-4 border-pln-primary p-8 rounded-r-2xl mb-12">
                        <h3 class="text-xl font-bold text-pln-dark mb-4">Layanan Utama Kami:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Pemeliharaan Gardu Induk (GI):</strong> Asesmen rutin, pengujian trafo, dan perbaikan fasilitas switchyard.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Jaringan Tegangan Menengah & Rendah (JTM/JTR):</strong> Inspeksi, perabasan pohon (ROW), dan penggantian komponen jaringan yang aus.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Pelayanan Teknik (Yantek):</strong> Tim reaksi cepat 24/7 untuk pemulihan gangguan listrik di sisi pelanggan.</span>
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
                            <a href="{{ route('services.transmisi-distribusi') }}" class="bg-pln-yellow text-pln-dark font-bold px-6 py-4 rounded-xl flex justify-between items-center shadow-md cursor-default">
                                Transmisi & Distribusi
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                            </a>
                            <a href="{{ route('services.drups') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                DRUPS & Beyond kWh
                            </a>
                            <a href="{{ route('services.pelanggan') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                Pelayanan Pelanggan
                            </a>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <p class="text-white/80 text-sm mb-4">Ada masalah jaringan di wilayah Anda?</p>
                            <a href="#" class="block w-full text-center bg-pln-primary hover:bg-white hover:text-pln-dark text-white font-bold py-3 rounded-full transition-colors shadow-md">
                                Hubungi Yantek
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>