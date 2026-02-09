<x-layout>
    <x-slot:title>Beranda</x-slot>

    <section class="relative bg-blue-900 h-[600px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Power Plant" 
                 class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-900/80 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl text-white">
                <span class="bg-cyan-500 text-blue-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide mb-4 inline-block">
                    Reliable Energy Partner
                </span>
                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Sinergi Energi untuk <br> <span class="text-cyan-400">Indonesia Terang</span>
                </h1>
                <p class="text-lg text-gray-200 mb-8 leading-relaxed">
                    Kami hadir sebagai mitra strategis dalam pengelolaan aset ketenagalistrikan, operasi, dan pemeliharaan untuk memastikan keandalan energi di Indonesia Tengah dan Timur.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="bg-cyan-500 text-blue-900 px-8 py-3 rounded-lg font-bold hover:bg-cyan-400 transition text-center shadow-lg hover:shadow-cyan-500/50">
                        Jelajahi Layanan
                    </a>
                    <a href="#" class="border border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-blue-900 transition text-center">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white -mt-10 relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 shadow-xl rounded-xl border-b-4 border-cyan-500">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
            <div>
                <p class="text-4xl font-bold text-blue-600">22+</p>
                <p class="text-gray-500 text-sm mt-2 font-medium">Tahun Pengalaman</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-blue-600">335</p>
                <p class="text-gray-500 text-sm mt-2 font-medium">Proyek Selesai</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-blue-600">24/7</p>
                <p class="text-gray-500 text-sm mt-2 font-medium">Siaga Operasional</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-blue-600">99%</p>
                <p class="text-gray-500 text-sm mt-2 font-medium">Kepuasan Mitra</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-100 rounded-full z-0"></div>
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                             alt="Engineer working" 
                             class="relative z-10 rounded-2xl shadow-2xl">
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Tentang Kami</h2>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Mitra Terpercaya Pengelolaan Aset Ketenagalistrikan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        PT PLN Nusa Daya adalah anak perusahaan PT PLN (Persero) yang berfokus pada jasa Operasi & Pemeliharaan (O&M) Pembangkit, Transmisi, dan Distribusi. Kami berkomitmen memberikan layanan terbaik dengan standar keselamatan tinggi.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-700">
                            <span class="bg-green-100 p-1 rounded-full mr-3 text-green-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            Profesional & Tersertifikasi
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="bg-green-100 p-1 rounded-full mr-3 text-green-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            Jangkauan Luas (Indonesia Timur & Tengah)
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="bg-green-100 p-1 rounded-full mr-3 text-green-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </span>
                            Teknologi Terkini
                        </li>
                    </ul>
                    <a href="#" class="text-blue-600 font-bold hover:text-blue-800 flex items-center group">
                        Pelajari Selengkapnya 
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Layanan Unggulan</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">Solusi menyeluruh mulai dari hulu hingga hilir untuk kebutuhan infrastruktur ketenagalistrikan Anda.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-blue-600 transition duration-300 cursor-pointer border border-gray-100 hover:shadow-xl hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-blue-600 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">O&M Pembangkit</h3>
                    <p class="text-gray-600 group-hover:text-blue-100 text-sm">Pengoperasian dan pemeliharaan mesin pembangkit dengan efisiensi tinggi dan monitoring aset realtime.</p>
                </div>

                <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-blue-600 transition duration-300 cursor-pointer border border-gray-100 hover:shadow-xl hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-blue-600 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">Transmisi & Distribusi</h3>
                    <p class="text-gray-600 group-hover:text-blue-100 text-sm">Layanan inspeksi jaringan, perbaikan gardu induk, dan manajemen aset distribusi yang handal.</p>
                </div>

                <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-blue-600 transition duration-300 cursor-pointer border border-gray-100 hover:shadow-xl hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-blue-600 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white">Pelayanan Pelanggan</h3>
                    <p class="text-gray-600 group-hover:text-blue-100 text-sm">Solusi manajemen pelanggan (Billman) dan layanan teknik (Yantek) yang responsif dan terukur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-900 text-white overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-full opacity-5 pointer-events-none">
             <svg width="100%" height="100%">
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <span class="text-cyan-400 font-bold tracking-widest uppercase text-sm mb-2 block">Wilayah Kerja</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Melayani Energi di <br>Indonesia Timur & Tengah</h2>
                <p class="text-blue-200 mb-8 leading-relaxed text-lg">
                    Dari Kalimantan hingga Papua, tim kami tersebar di berbagai unit pelaksana untuk memastikan keandalan pasokan listrik di medan yang menantang sekalipun.
                </p>
                
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-3 w-3 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="font-semibold">Kalimantan</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex h-3 w-3 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="font-semibold">Sulawesi</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex h-3 w-3 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="font-semibold">Nusa Tenggara</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex h-3 w-3 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="font-semibold">Maluku & Papua</span>
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 relative">
                <img src="{{ asset('img/peta-wilayah.jpg') }}" 
                     alt="Peta Wilayah Kerja PLN Nusa Daya" 
                     class="w-full drop-shadow-2xl opacity-90 hover:opacity-100 transition duration-500 transform hover:scale-105 border-4 border-white/20">
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Kabar PLN Nusa Daya</h2>
                    <p class="text-gray-600 mt-2 text-lg">Informasi terkini seputar korporasi, CSR, dan kinerja perusahaan.</p>
                </div>
                <a href="#" class="group flex items-center text-blue-600 font-bold hover:text-blue-800 transition">
                    Lihat Semua Berita 
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Meeting Direksi" 
                             class="w-full h-full object-cover hover:scale-105 transition duration-700">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Korporat
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center text-gray-400 text-sm mb-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            10 Februari 2026
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition">
                            <a href="#">PLN Nusa Daya Perkuat Digitalisasi Pembangkit di Sulawesi</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                            Transformasi digital dilakukan untuk meningkatkan efisiensi operasional dan monitoring aset secara realtime.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold text-sm hover:underline mt-auto">Baca Selengkapnya</a>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Kegiatan CSR" 
                             class="w-full h-full object-cover hover:scale-105 transition duration-700">
                        <div class="absolute top-4 left-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            CSR
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center text-gray-400 text-sm mb-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            05 Februari 2026
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition">
                            <a href="#">Peduli Lingkungan, Pegawai Tanam 1000 Mangrove</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                            Sebagai wujud tanggung jawab sosial lingkungan, PLN Nusa Daya menggelar aksi penanaman mangrove di pesisir.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold text-sm hover:underline mt-auto">Baca Selengkapnya</a>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                    <div class="h-56 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Penghargaan" 
                             class="w-full h-full object-cover hover:scale-105 transition duration-700">
                        <div class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Penghargaan
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center text-gray-400 text-sm mb-3">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            28 Januari 2026
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition">
                            <a href="#">Raih Penghargaan K3 Tingkat Nasional 2025</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                            Komitmen terhadap keselamatan kerja membuahkan hasil manis dengan diraihnya penghargaan Zero Accident.
                        </p>
                        <a href="#" class="text-blue-600 font-semibold text-sm hover:underline mt-auto">Baca Selengkapnya</a>
                    </div>
                </article>
            </div>
            
            <div class="mt-8 text-center md:hidden">
                 <a href="#" class="inline-block border border-blue-600 text-blue-600 px-6 py-2 rounded-full font-semibold hover:bg-blue-50">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-900 text-white text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4">Ingin Menjadi Mitra Penyedia Kami?</h2>
            <p class="text-blue-200 mb-8">Dapatkan informasi terbaru mengenai pengadaan barang dan jasa di lingkungan PT PLN Nusa Daya.</p>
            <a href="#" class="inline-block bg-yellow-500 text-blue-900 font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition shadow-lg hover:shadow-yellow-500/50">
                Lihat Info Pengadaan
            </a>
        </div>
    </section>
</x-layout>