<x-layout>
    <x-slot:title>Anak Perusahaan</x-slot>

    <div class="relative bg-blue-950 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}" class="w-full h-full object-cover" alt="Background">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950 via-blue-900/95 to-blue-900/90"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-teal-500/20 border border-teal-500/30 text-teal-300 text-xs font-bold tracking-widest uppercase mb-4">Subsidiaries</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Anak Perusahaan</h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
                Sinergi strategis untuk memperkuat layanan ketenagalistrikan dan memberikan nilai tambah bagi pelanggan di seluruh nusantara.
            </p>
        </div>
    </div>

    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 flex flex-col lg:flex-row group hover:shadow-2xl transition-all duration-500">
                
                <div class="lg:w-2/5 relative min-h-[350px] flex items-center justify-center p-10 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80" 
                         alt="Latar Belakang PCN" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950/90 via-blue-900/60 to-blue-900/40"></div>
                    
                    <div class="relative z-10 bg-white p-6 rounded-2xl shadow-2xl transform group-hover:scale-105 transition duration-500 border border-gray-100/50">
                        <img src="{{ asset('img/logo-pln-pcn.jpg') }}" 
                             alt="Logo PT Paguntaka Cahaya Nusantara" 
                             class="h-16 lg:h-20 w-auto object-contain">
                    </div>
                </div>

                <div class="lg:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-3 py-1 rounded-full bg-teal-100 text-teal-700 text-xs font-bold uppercase tracking-wide">Anak Perusahaan</span>
                        <div class="h-px bg-gray-200 flex-grow"></div>
                    </div>

                    <h2 class="text-3xl font-bold text-blue-950 mb-4 group-hover:text-teal-600 transition-colors">PT Paguntaka Cahaya Nusantara</h2>
                    
                    <p class="text-gray-600 leading-relaxed mb-6 text-justify">
                        PT. Paguntaka Cahaya Nusantara merupakan anak perusahaan dari PT. PLN Nusa Daya yang didirikan pada tanggal 8 Desember 2017, yang memiliki peran sebagai Pengelola Jasa Tenaga Kerja (Workforce Management) Bidang Ketenagalistrikan dan Jasa Penunjang Ketenagalistrikan lainnya yang Unggul dan Terpercaya.
                    </p>

                    <div class="bg-blue-50/50 rounded-xl p-6 mb-8 border border-blue-100">
                        <h4 class="font-bold text-blue-950 mb-3 text-sm uppercase tracking-wide flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            Bidang Usaha
                        </h4>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-sm text-gray-700">
                                <svg class="w-5 h-5 text-teal-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>Penyediaan dan Pengelolaan Tenaga Kerja Operasi dan Pemeliharaan Pembangkit, Transmisi, Distribusi dan Pelayan Pelanggan Ketenagalistrikan.</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm text-gray-700">
                                <svg class="w-5 h-5 text-teal-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>Penyediaan Jasa Penunjang Ketenagalistrikan lainnya (Management Building).</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-gray-100 pt-6 mb-8 space-y-3 text-sm text-gray-600">
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-100 p-1.5 rounded text-gray-500 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span class="font-medium">Jalan RE Martadinata No.35 RT.52 Kel.Balikpapan KALTIM 76113</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-100 p-1.5 rounded text-gray-500 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <span class="font-medium">(0542) 8507238</span>
                        </div>
                    </div>

                    <a href="https://paguntaka.co.id/" target="_blank" class="inline-flex items-center text-blue-950 font-bold hover:text-teal-600 transition-colors group/link w-fit">
                        Kunjungi Website Resmi
                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-layout>