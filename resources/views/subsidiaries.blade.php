<x-layout>
    <x-slot:title>Anak Perusahaan</x-slot>

    <div class="relative bg-pln-dark py-24 overflow-hidden pt-32 mt-[-80px]">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}" class="w-full h-full object-cover blur-sm" alt="Background">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-pln-dark via-pln-dark/95 to-pln-dark/90"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Anak Perusahaan</h1>
            <p class="text-white/80 text-lg max-w-2xl mx-auto leading-relaxed">
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
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-pln-dark/90 via-pln-dark/60 to-pln-dark/40"></div>
                    
                    <div class="relative z-10 bg-white p-8 rounded-2xl shadow-2xl transform group-hover:scale-105 transition duration-500 border-b-4 border-pln-yellow">
                        <img src="{{ asset('img/logo-pln-pcn.jpg') }}" 
                             alt="Logo PT Paguntaka Cahaya Nusantara" 
                             class="h-16 lg:h-20 w-auto object-contain">
                    </div>
                </div>

                <div class="lg:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-4 py-1.5 rounded-full bg-pln-primary/10 text-pln-primary text-xs font-bold uppercase tracking-widest border border-pln-primary/20">Profil Anak Perusahaan</span>
                        <div class="h-px bg-gray-200 flex-grow"></div>
                    </div>

                    <h2 class="text-3xl font-extrabold text-pln-dark mb-4 group-hover:text-pln-primary transition-colors">PT Paguntaka Cahaya Nusantara</h2>
                    
                    <p class="text-gray-600 leading-relaxed mb-8 text-justify text-lg">
                        PT. Paguntaka Cahaya Nusantara merupakan anak perusahaan dari PT. PLN Nusa Daya yang didirikan pada tanggal 8 Desember 2017. Kami memiliki peran vital sebagai Pengelola Jasa Tenaga Kerja (Workforce Management) Bidang Ketenagalistrikan dan Jasa Penunjang Ketenagalistrikan lainnya yang Unggul dan Terpercaya.
                    </p>

                    <div class="bg-gray-50 rounded-2xl p-6 mb-8 border-l-4 border-pln-primary shadow-sm">
                        <h4 class="font-bold text-pln-dark mb-4 text-sm uppercase tracking-widest flex items-center gap-2">
                            <svg class="w-5 h-5 text-pln-yellow" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            Bidang Usaha Utama
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-pln-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Penyediaan dan Pengelolaan Tenaga Kerja Operasi dan Pemeliharaan Pembangkit, Transmisi, Distribusi dan Pelayan Pelanggan Ketenagalistrikan.</span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-pln-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>Penyediaan Jasa Penunjang Ketenagalistrikan lainnya (Management Building).</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-gray-100 pt-6 mb-8 space-y-4 text-sm text-gray-600">
                        <div class="flex items-center gap-4">
                            <div class="bg-pln-primary/10 p-2 rounded-lg text-pln-primary shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span class="font-medium leading-relaxed">Jalan RE Martadinata No.35 RT.52 Kel.Balikpapan KALTIM 76113</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-pln-primary/10 p-2 rounded-lg text-pln-primary shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <span class="font-medium font-bold text-gray-800">(0542) 8507238</span>
                        </div>
                    </div>

                    <a href="https://paguntaka.co.id/" target="_blank" class="inline-flex items-center bg-pln-dark text-white px-8 py-3.5 rounded-full font-bold hover:bg-pln-primary transition-all duration-300 shadow-md hover:shadow-lg w-fit group/btn">
                        Kunjungi Website Resmi
                        <svg class="w-5 h-5 ml-2 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-layout>