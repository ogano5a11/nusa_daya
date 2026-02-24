<x-layout>
    <x-slot:title>AMC Pembangkit - PLN Nusa Daya</x-slot>

    <section class="relative bg-pln-dark h-[450px] flex items-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/gambar-services-pembangkit.jpg') }}"
                 alt="Mesin Pembangkit PLN"  
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
                                <span class="text-white">AMC Pembangkit</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-white leading-tight">
                    Asset Management Contract <br><span class="text-pln-primary">(AMC) Pembangkit</span>
                </h1>
                <p class="text-xl text-white/80 leading-relaxed">
                    Layanan pengoperasian dan pemeliharaan (O&M) mesin pembangkit untuk menjamin EAF (Equivalent Availability Factor) maksimal dan suplai energi yang stabil.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-6">Meningkatkan Keandalan Pembangkit Anda</h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        PLN Nusa Daya memiliki pengalaman lebih dari dua dekade dalam mengelola berbagai jenis pembangkit listrik, mulai dari PLTD (Diesel), PLTU (Uap), hingga pembangkit EBT (Energi Baru Terbarukan). Melalui layanan AMC Pembangkit, kami mengambil alih tanggung jawab pengelolaan aset Anda dengan standar keamanan dan efisiensi tertinggi.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-10">
                        Tim engineer tersertifikasi kami memastikan setiap putaran turbin beroperasi pada titik efisiensi optimum (Heat Rate), mengurangi angka <i>forced outage</i> (mati mendadak), dan memperpanjang usia pakai aset (life extension).
                    </p>

                    <div class="bg-gray-50 border-l-4 border-pln-primary p-8 rounded-r-2xl mb-12">
                        <h3 class="text-xl font-bold text-pln-dark mb-4">Ruang Lingkup Pekerjaan (Scope of Work):</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Daily Operation:</strong> Pengoperasian mesin pembangkit 24/7.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Preventive Maintenance:</strong> Pemeliharaan rutin berkala untuk mencegah kerusakan alat berat.</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Corrective Maintenance:</strong> Perbaikan cepat tanggap pada saat terjadi gangguan (troubleshooting).</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-pln-yellow mr-3 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-gray-700"><strong>Overhaul Service:</strong> Inspeksi menyeluruh (Minor, Major, atau Top Overhaul).</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="lg:w-1/3">
                    <div class="bg-pln-dark rounded-3xl p-8 sticky top-32 border-t-4 border-pln-yellow shadow-xl">
                        <h3 class="text-xl font-bold text-white mb-6">Layanan Lainnya</h3>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route('services.amc-pembangkit') }}" class="bg-pln-yellow text-pln-dark font-bold px-6 py-4 rounded-xl flex justify-between items-center shadow-md cursor-default">
                                AMC Pembangkit
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                            </a>
                            <a href="{{ route('services.transmisi-distribusi') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                Transmisi & Distribusi
                                <span class="opacity-0 -translate-x-2 transition-all">&rarr;</span>
                            </a>
                            <a href="{{ route('services.drups') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                DRUPS & Beyond kWh
                            </a>
                            <a href="{{ route('services.pelanggan') }}" class="text-white/80 hover:bg-white/10 hover:text-white font-medium px-6 py-4 rounded-xl flex justify-between items-center transition-colors">
                                Pelayanan Pelanggan
                            </a>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <p class="text-white/80 text-sm mb-4">Butuh konsultasi teknis untuk pembangkit Anda?</p>
                            <a href="#" class="block w-full text-center bg-pln-primary hover:bg-white hover:text-pln-dark text-white font-bold py-3 rounded-full transition-colors shadow-md">
                                Hubungi Tim Kami
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>