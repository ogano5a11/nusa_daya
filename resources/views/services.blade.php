<x-layout>
    <x-slot:title>Layanan Bisnis</x-slot>

    <section class="relative bg-blue-900 h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19480c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Infrastructure" 
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900 via-blue-900/40 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Bisnis</h1>
            <p class="text-xl text-blue-200 max-w-2xl mx-auto">Solusi Terintegrasi untuk Keandalan Energi Nasional</p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center inline-block border-b-4 border-yellow-400 pb-2">Solusi Kami</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed mt-4">
                Kami menyediakan layanan pengelolaan aset ketenagalistrikan yang komprehensif melalui skema Asset Management Contract (AMC), didukung oleh tenaga ahli profesional dan teknologi monitoring terkini.
            </p>
        </div>
    </section>

    <section class="pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/gambar-services-pembangkit.jpg') }}"
                         alt="O&M Pembangkit" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="bg-blue-50 w-16 h-16 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center inline-block border-b-2 border-blue-600 pb-1">AMC Pembangkit</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Kami mengelola pengoperasian dan pemeliharaan mesin pembangkit untuk memastikan ketersediaan (EAF) yang tinggi. Layanan kami mencakup monitoring parameter mesin secara real-time, manajemen suku cadang, hingga pemeliharaan preventif dan korektif.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 font-medium">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-blue-600 rounded-full"></span> Pengoperasian Mesin</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-blue-600 rounded-full"></span> Pemeliharaan Rutin</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-blue-600 rounded-full"></span> Pengelolaan Aset</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-blue-600 rounded-full"></span> HSE & Lingkungan</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/gambar-services-transmisi.jpeg') }}"
                         alt="Transmisi & Distribusi" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="bg-yellow-50 w-16 h-16 rounded-xl flex items-center justify-center text-yellow-600 mb-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center inline-block border-b-2 border-yellow-500 pb-1">AMC Transmisi & Distribusi</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan keandalan jaringan melalui pemeliharaan gardu induk dan jaringan distribusi. Kami fokus pada penurunan angka gangguan (SAIDI/SAIFI) untuk menjamin kualitas listrik sampai ke pelanggan akhir.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 font-medium">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Inspeksi Jaringan</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Perbaikan Hotspot</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Gardu Induk (GI)</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-yellow-500 rounded-full"></span> Yantek 24/7</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/logo-listriqu.jpg') }}"
                         alt="Beyond kWh" class="rounded-2xl shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <div class="bg-cyan-50 w-16 h-16 rounded-xl flex items-center justify-center text-cyan-600 mb-6">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center inline-block border-b-2 border-cyan-500 pb-1">ListriQu & Pelayanan Pelanggan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Kami juga mengelola layanan teknis di sisi pelanggan melalui unit bisnis ListriQu, memberikan kemudahan bagi pelanggan dalam menangani gangguan instalasi listrik rumah tangga maupun bisnis.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 font-medium">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-cyan-500 rounded-full"></span> Billman (Pembaca Meter)</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-cyan-500 rounded-full"></span> Perbaikan Instalasi</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-cyan-500 rounded-full"></span> Manajemen Data</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-cyan-500 rounded-full"></span> Survey & Pemetaan</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 bg-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Butuh Solusi Energi Profesional?</h2>
            <p class="text-blue-200 mb-8 leading-relaxed">Kami siap menjadi mitra teknis dalam mengoptimalkan aset ketenagalistrikan Anda dengan standar internasional.</p>
            <a href="#" class="inline-block bg-yellow-500 text-blue-900 font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition shadow-lg">Konsultasi Layanan</a>
        </div>
    </section>
</x-layout>