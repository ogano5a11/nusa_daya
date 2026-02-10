<x-layout>
    <x-slot:title>Tentang Kami</x-slot>

    <section class="relative bg-blue-900 h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}"
                 alt="Office Building"  
                 class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Tentang Kami</h1>
            <p class="text-xl text-blue-200 max-w-2xl mx-auto">
                Mengenal lebih dekat PT PLN Nusa Daya sebagai mitra terpercaya dalam pengelolaan aset ketenagalistrikan.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('img/gambar-profil-perusahaan.png') }}"
                             alt="Team PLN Nusa Daya" 
                             class="w-full h-full object-cover">
                        <div class="absolute bottom-0 right-0 bg-yellow-500 text-blue-900 p-6 rounded-tl-3xl">
                            <p class="text-4xl font-bold">22+</p>
                            <p class="text-sm font-semibold uppercase">Tahun Mengabdi</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-2 block">Profil Perusahaan</span>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Mengelola Energi untuk Masa Depan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        PT PLN Nusa Daya adalah anak perusahaan PT PLN (Persero) yang didirikan pada tahun 2003. Awalnya berfokus pada penyediaan tenaga listrik di Tarakan, kini kami bertransformasi menjadi perusahaan penyedia jasa Operasi dan Pemeliharaan (O&M) untuk Pembangkit, Transmisi, dan Distribusi.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Dengan wilayah kerja yang mencakup Indonesia Tengah dan Timur, kami berkomitmen untuk menjaga keandalan pasokan listrik demi mendorong pertumbuhan ekonomi dan kesejahteraan masyarakat.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-blue-600 pl-4">
                            <h4 class="font-bold text-gray-900 text-lg">Profesional</h4>
                            <p class="text-sm text-gray-500">SDM tersertifikasi dan kompeten.</p>
                        </div>
                        <div class="border-l-4 border-yellow-500 pl-4">
                            <h4 class="font-bold text-gray-900 text-lg">Inovatif</h4>
                            <p class="text-sm text-gray-500">Penerapan teknologi terkini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Visi & Misi</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Arah dan tujuan kami dalam memberikan kontribusi terbaik bagi kelistrikan nasional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border-t-4 border-blue-600">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Visi</h3>
                    <p class="text-gray-600 text-center leading-relaxed italic">
                        "Menjadi Perusahaan Pengelola Aset Ketenagalistrikan Terkemuka di Wilayah Tengah dan Timur Indonesia dan Tumbuh Berkelanjutan."
                    </p>
                </div>

                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border-t-4 border-yellow-500">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Misi</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Memberikan nilai tambah yang optimal kepada PLN Group dengan memastikan ketersediaan layanan dan keberlangsungan usaha (securing business sustainibility), optimasi dan efisiensi biaya (optimizing cost efficiency) dan keunggulan kompetensi dalam industri ketenagalistrikan (leading industry capabilities).</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Menjalankan bisnis asset Operator dan Asset Manager sistem ketenagalistrikan yang berkualitas, unggul dan efisien.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Berpartisipasi dalam pengembangan pembangkit listrik skala < 100 MW di Kawasan Timur Indonesia di Pulau Kalimantan, Sulawesi, Maluku, Papua dan Nusa Tenggara untuk memastikan keandalan pasokan tenaga listrik sekaligus meningkatkan kontribusi laba (increasing profit contribution) untuk PLN Group dengan memanfaatkan potensi pasar eksternal.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Mengembangkan kompetensi dan profesionalisme Human Capital untuk menjamin kepuasan pelanggan.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Mewujudkan citra profesionalitas dalam menunjang pelayanan penyediaan tenaga listrik.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-12">Tata Nilai Utama: <span class="text-yellow-400">AKHLAK</span></h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">A</h3>
                    <p class="font-semibold">Amanah</p>
                    <p class="text-xs text-blue-200 mt-2">Memegang teguh kepercayaan yang diberikan.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">K</h3>
                    <p class="font-semibold">Kompeten</p>
                    <p class="text-xs text-blue-200 mt-2">Terus belajar dan mengembangkan kapabilitas.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">H</h3>
                    <p class="font-semibold">Harmonis</p>
                    <p class="text-xs text-blue-200 mt-2">Saling peduli dan menghargai perbedaan.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">L</h3>
                    <p class="font-semibold">Loyal</p>
                    <p class="text-xs text-blue-200 mt-2">Berdedikasi dan mengutamakan kepentingan Bangsa.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">A</h3>
                    <p class="font-semibold">Adaptif</p>
                    <p class="text-xs text-blue-200 mt-2">Terus berinovasi dan antusias dalam menggerakkan ataupun menghadapi perubahan.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl hover:bg-white/20 transition backdrop-blur-sm">
                    <h3 class="font-bold text-xl mb-2 text-yellow-400">K</h3>
                    <p class="font-semibold">Kolaboratif</p>
                    <p class="text-xs text-blue-200 mt-2">Membangun kerja sama yang sinergis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Manajemen Perusahaan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kepemimpinan yang kuat untuk membawa perusahaan mencapai visi masa depan.</p>
            </div>

            <div class="mb-20">
                <h3 class="text-2xl font-bold text-blue-900 text-center mb-8 uppercase tracking-widest border-b-2 border-yellow-400 inline-block px-8 pb-2 mx-auto">Dewan Komisaris</h3>
                <div class="flex justify-center">
                    <div class="group w-full md:w-1/3">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-gray-100 h-96">
                            <img src="{{ asset('img/komisaris.png') }}"
                                 alt="Agung Nugraha" 
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500">
                            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-6 text-white">
                                <h3 class="text-xl font-bold">Agung Nugraha</h3>
                                <p class="text-yellow-400 font-medium text-sm">Komisaris Utama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-blue-900 text-center mb-8 uppercase tracking-widest border-b-2 border-yellow-400 inline-block px-8 pb-2 mx-auto">Jajaran Direksi</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="group">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-gray-100 h-80">
                            <img src="{{ asset('img/dirut.jpg') }}"
                                 alt="Feby Joko Priharto" 
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center">Feby Joko Priharto</h3>
                        <p class="text-blue-600 font-medium text-center text-sm">Direktur Utama</p>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-gray-100 h-80">
                            <img src="{{ asset('img/dirkeu.jpg') }}"
                                 alt="Zulhendri" 
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center">Zulhendri</h3>
                        <p class="text-blue-600 font-medium text-center text-sm">Direktur Keuangan, Manajemen Risiko & HC</p>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-gray-100 h-80">
                            <img src="{{ asset('img/dirop.jpg') }}"
                                 alt="Reny Wahyu Setiaswan" 
                                 class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center">Reny Wahyu Setiaswan</h3>
                        <p class="text-blue-600 font-medium text-center text-sm">Direktur Operasi & Pengembangan Usaha</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>