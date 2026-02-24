<x-layout>
    <x-slot:title>Tentang Kami</x-slot>

    <section class="relative bg-pln-dark h-[400px] flex items-center justify-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}"
                 alt="Office Building"  
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-pln-dark via-pln-dark/80 to-transparent"></div>
        </div>

        <div class="relative z-10 text-center text-white px-4 mt-8">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight text-white">Tentang Kami</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">
                Mengenal lebih dekat PT PLN Nusa Daya sebagai mitra terpercaya dalam pengelolaan aset ketenagalistrikan.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                
                <div class="md:w-1/2 relative group">
                    <div class="absolute -inset-4 bg-gradient-to-r from-pln-primary to-pln-blue rounded-3xl opacity-20 group-hover:opacity-40 blur-lg transition duration-700"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="{{ asset('img/gambar-profil-perusahaan.png') }}"
                             alt="Team PLN Nusa Daya" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 right-0 bg-pln-yellow text-pln-dark p-6 rounded-tl-3xl shadow-lg">
                            <p class="text-4xl font-extrabold">22+</p>
                            <p class="text-sm font-bold uppercase tracking-widest mt-1">Tahun Mengabdi</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <span class="text-pln-primary font-bold tracking-widest uppercase text-sm mb-2 block flex items-center">
                        <span class="w-8 h-0.5 bg-pln-primary mr-3"></span> Profil Perusahaan
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-pln-dark mb-6 leading-tight">Mengelola Energi untuk Masa Depan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        PT PLN Nusa Daya adalah anak perusahaan PT PLN (Persero) yang didirikan pada tahun 2003. Awalnya berfokus pada penyediaan tenaga listrik di Tarakan, kini kami bertransformasi menjadi perusahaan penyedia jasa Operasi dan Pemeliharaan (O&M) untuk Pembangkit, Transmisi, dan Distribusi.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                        Dengan wilayah kerja yang mencakup Indonesia Tengah dan Timur, kami berkomitmen untuk menjaga keandalan pasokan listrik demi mendorong pertumbuhan ekonomi dan kesejahteraan masyarakat.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 bg-gray-50 p-6 rounded-2xl border border-gray-100">
                        <div class="border-l-4 border-pln-primary pl-4">
                            <h4 class="font-bold text-pln-dark text-lg">Profesional</h4>
                            <p class="text-sm text-gray-500 mt-1">SDM tersertifikasi dan kompeten tingkat nasional.</p>
                        </div>
                        <div class="border-l-4 border-pln-yellow pl-4">
                            <h4 class="font-bold text-pln-dark text-lg">Inovatif</h4>
                            <p class="text-sm text-gray-500 mt-1">Penerapan teknologi O&M terkini dan modern.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-pln-primary font-bold tracking-widest uppercase text-sm mb-2 block">Arah & Tujuan</span>
                <h2 class="text-4xl font-extrabold text-pln-dark">Visi & Misi</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">Dedikasi kami dalam memberikan kontribusi terbaik bagi kelistrikan nasional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-10 lg:p-12 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.1)] transition duration-500 border-t-4 border-pln-primary group">
                    <div class="w-20 h-20 bg-pln-primary/10 rounded-2xl flex items-center justify-center mb-8 mx-auto group-hover:-translate-y-2 transition-transform duration-300">
                        <svg class="w-10 h-10 text-pln-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-pln-dark mb-6 text-center">Visi</h3>
                    <p class="text-gray-600 text-center leading-relaxed text-xl font-medium italic relative">
                        <span class="absolute -top-4 -left-2 text-4xl text-gray-200">"</span>
                        Menjadi Perusahaan Pengelola Aset Ketenagalistrikan Terkemuka di Wilayah Tengah dan Timur Indonesia dan Tumbuh Berkelanjutan.
                        <span class="absolute -bottom-4 -right-2 text-4xl text-gray-200">"</span>
                    </p>
                </div>

                <div class="bg-white p-10 lg:p-12 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.1)] transition duration-500 border-t-4 border-pln-yellow group">
                    <div class="w-20 h-20 bg-pln-yellow/20 rounded-2xl flex items-center justify-center mb-8 mx-auto group-hover:-translate-y-2 transition-transform duration-300">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-3xl font-extrabold text-pln-dark mb-8 text-center">Misi</h3>
                    <ul class="space-y-5 text-gray-600">
                        <li class="flex items-start group/item">
                            <div class="bg-pln-primary/10 p-1 rounded-full mr-4 mt-0.5 group-hover/item:bg-pln-primary transition-colors shrink-0">
                                <svg class="w-4 h-4 text-pln-primary group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="leading-relaxed">Memberikan nilai tambah yang optimal kepada PLN Group dengan memastikan ketersediaan layanan dan keberlangsungan usaha, optimasi efisiensi biaya dan keunggulan kompetensi dalam industri ketenagalistrikan.</span>
                        </li>
                        <li class="flex items-start group/item">
                            <div class="bg-pln-primary/10 p-1 rounded-full mr-4 mt-0.5 group-hover/item:bg-pln-primary transition-colors shrink-0">
                                <svg class="w-4 h-4 text-pln-primary group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="leading-relaxed">Menjalankan bisnis asset Operator dan Asset Manager sistem ketenagalistrikan yang berkualitas, unggul dan efisien.</span>
                        </li>
                        <li class="flex items-start group/item">
                            <div class="bg-pln-primary/10 p-1 rounded-full mr-4 mt-0.5 group-hover/item:bg-pln-primary transition-colors shrink-0">
                                <svg class="w-4 h-4 text-pln-primary group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="leading-relaxed">Berpartisipasi dalam pengembangan pembangkit listrik untuk memastikan keandalan pasokan sekaligus meningkatkan kontribusi laba untuk PLN Group.</span>
                        </li>
                        <li class="flex items-start group/item">
                            <div class="bg-pln-primary/10 p-1 rounded-full mr-4 mt-0.5 group-hover/item:bg-pln-primary transition-colors shrink-0">
                                <svg class="w-4 h-4 text-pln-primary group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="leading-relaxed">Mengembangkan kompetensi dan profesionalisme Human Capital untuk menjamin kepuasan pelanggan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-pln-dark text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-pln-primary/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-pln-blue/10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl font-extrabold mb-16 tracking-tight">
                Tata Nilai Utama: <span class="text-pln-yellow border-b-4 border-pln-yellow pb-2">AKHLAK</span>
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">A</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Amanah</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Memegang teguh kepercayaan yang diberikan.</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">K</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Kompeten</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Terus belajar dan mengembangkan kapabilitas.</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">H</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Harmonis</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Saling peduli dan menghargai perbedaan.</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">L</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Loyal</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Berdedikasi dan mengutamakan kepentingan Bangsa.</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">A</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Adaptif</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Terus berinovasi dan antusias menggerakkan perubahan.</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-pln-primary/50 transition-all duration-300 backdrop-blur-md group hover:-translate-y-2">
                    <h3 class="font-black text-5xl mb-4 text-pln-yellow group-hover:text-pln-primary transition-colors">K</h3>
                    <p class="font-bold text-xl mb-3 tracking-wide">Kolaboratif</p>
                    <p class="text-sm text-white/70 leading-relaxed group-hover:text-white transition-colors">Membangun kerja sama yang produktif dan sinergis.</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>