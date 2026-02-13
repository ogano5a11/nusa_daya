<x-layout>
    <x-slot:title>Manajemen Perusahaan</x-slot>

    <div class="relative bg-blue-950 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}" class="w-full h-full object-cover" alt="Background">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950 via-blue-900/90 to-blue-900/80"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Jajaran Manajemen</h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
                Dipimpin oleh para profesional berpengalaman yang berdedikasi untuk mewujudkan visi PLN Nusa Daya.
            </p>
        </div>
    </div>

    <div class="bg-gray-50 pb-20" x-data="{ 
        openModal: false,
        activeProfile: {},
        
        // DATA KOMISARIS & DIREKSI
        leaders: [
            // --- KOMISARIS ---
            {
                id: 1,
                name: 'Nama Komisaris Utama',
                role: 'Komisaris Utama',
                group: 'Komisaris',
                image: '{{ asset('img/komisaris.png') }}', // Foto grup untuk cover
                detailImage: '{{ asset('img/komisaris.png') }}', // Foto detail di pop up
                bio: 'Menjabat sebagai Komisaris Utama sejak Tahun 202X. Memiliki pengalaman luas di bidang ketenagalistrikan dan manajemen strategis.',
                education: [
                    'S2 Manajemen Bisnis, Universitas Indonesia (2010)',
                    'S1 Teknik Elektro, Institut Teknologi Bandung (2000)'
                ],
                career: [
                    'Kepala Divisi Regional (2018-2022)',
                    'General Manager UID (2015-2018)'
                ]
            },
            
            // --- DIREKSI ---
            {
                id: 2,
                name: 'Feby Joko Priharto',
                role: 'Direktur Utama',
                group: 'Direksi',
                image: '{{ asset('img/dirut.jpg') }}',
                detailImage: '{{ asset('img/dirut.jpg') }}',
                bio: 'Diangkat sebagai Direktur Utama PT PLN Nusa Daya. Beliau bertanggung jawab penuh dalam memimpin arah strategis perusahaan.',
                education: [
                    'S2 Master of Business Administration, UNIVERSITAS TENAGA NASIONAL MALAYSIA (2006)',
                    'Sarjana Teknik Mesin, UNIVERSITAS SRIWIJAYA (1992)'
                ],
                career: [
                    'Direktur Utama PT PLN Nusa Daya (2023-sekarang)',
                    'Direktur Utama PT PLN Tarakan (2023)',
                    'Senior Specialist Direktorat Distribusi PT PLN (PERSERO) KANTOR PUSAT PT PLN (PERSERO) (2022-2023).',
                    'EVP RJP Divisi Perencanaan Dan Pengendalian Regional Jawa, Madura Dan Bali Direktorat Transmisi Dan Perencanaan Sistem PT PLN (PERSERO) KANTOR PUSAT PT PLN (PERSERO) (2021 – 2023).',
                    'EVP RETAIL REG JAMALI Divisi Retail Regional Jawa, Madura Dan Bali Direktorat Bisnis Regional Jawa, Madura Dan Bali PT PLN (PERSERO) KANTOR PUSAT PT PLN (PERSERO) (2020 – 2021).'
                ]
            },
            {
                id: 3,
                name: 'Zulhendri',
                role: 'Direktur Keuangan & ADM',
                group: 'Direksi',
                image: '{{ asset('img/dirkeu.jpg') }}',
                detailImage: '{{ asset('img/dirkeu.jpg') }}',
                bio: 'Profesional keuangan dengan sertifikasi CFA dan pengalaman lebih dari 15 tahun dalam pengelolaan aset dan risiko korporasi.',
                education: [
                    'S2 Master of Finance, Curtin University of Technology, Perth, Australia (2010)',
                    'Sarjana Akuntansi, Universitas Andalas (2001)'
                ],
                career: [
                    'Direktur Keuangan, Manajemen Risiko, dan Human Capital PT PLN Nusa Daya (2023-sekarang)',
                    'Direktur Keuangan & Administrasi PT PLN Tarakan (2019-2023)',
                    'Manajer Portfolio Management 1 pada Bidang Portfolio Management Divisi Portfolio Management Direktorat Perencanaan Korporat PT PLN (Persero) Kantor Pusat (2018)',
                    'Deputi Manajer Kemitraan Bisnis pada Bidang Kemitraan Bisnis Divisi Transaksi Tenaga Listrik dan Kemitraan Bisnis Direktorat Perencanaan Korporat PT PLN (Persero) Kantor Pusat (2016-2018)',
                    'Deputi Manajer Anggaran dan Keuangan pada Bidang Keuangan, SDM, dan Administrasi PT PLN (Persero) Pusat Pemeliharaan Ketenagalistrikan (2016)'
                ]
            },
            {
                id: 4,
                name: 'Reny Wahyu Setiaswan',
                role: 'Direktur Operasi',
                group: 'Direksi',
                image: '{{ asset('img/dirop.jpg') }}',
                detailImage: '{{ asset('img/dirop.jpg') }}',
                bio: 'Memiliki keahlian mendalam dalam manajemen operasi sistem tenaga listrik dan pemeliharaan aset distribusi.',
                education: [
                    'Sarjana Teknik Listrik, S.T.TEKNIK YPLN (1996)'
                ],
                career: [
                    'Direktur Operasi & Pengembangan Usaha PT PLN Nusa Daya (2023-sekarang)',
                    'Direktur Operasi & Pengembangan Usaha PT PLN Tarakan (2023)',
                    'VP KIN dan STD KBJ DIST Bidang Kinerja Dan Standarisasi Kebijakan Distribusi Divisi Perencanaan Strategis Distribusi Direktorat Distribusi PT PLN (Persero) Kantor Pusat PT PLN (Persero) (2022–2023)',
                    'SRM DIST Bidang Distribusi PT PLN (Persero) Unit Induk Wilayah Sumatera Selatan, Jambi dan Bengkulu PT PLN (Persero) (2022)',
                    'SRM REN Bidang Perencanaan PT PLN (Persero) Unit Induk Wilayah Sumatera Utara PT PLN (Persero) (2021–2022)'
                ]
            }
        ],

        showDetail(leader) {
            this.activeProfile = leader;
            this.openModal = true;
        }
    }">

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-blue-950 mb-4">Dewan Komisaris</h2>
                    <div class="w-20 h-1 bg-teal-500 mx-auto rounded-full"></div>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                        Melakukan pengawasan dan memberikan nasihat kepada Direksi.
                    </p>
                </div>

                <div class="flex justify-center">
                    <template x-for="leader in leaders.filter(l => l.group === 'Komisaris')" :key="leader.id">
                        <div @click="showDetail(leader)" class="cursor-pointer w-full max-w-sm group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-teal-500 hover:-translate-y-2 relative">
                            <div class="absolute top-4 right-4 z-20 bg-black/60 backdrop-blur-sm text-white text-xs px-3 py-1.5 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Lihat Biodata
                            </div>
                            <div class="relative h-96 overflow-hidden bg-gray-50">
                                <img :src="leader.image" :alt="leader.name" class="w-full h-full object-contain p-4 transform group-hover:scale-105 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-950/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-blue-950 mb-1 group-hover:text-teal-600 transition-colors" x-text="leader.role"></h3> <p class="text-gray-500 text-sm">PT PLN Nusa Daya</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50 border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-blue-950 mb-4">Dewan Direksi</h2>
                    <div class="w-20 h-1 bg-teal-500 mx-auto rounded-full"></div>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                        Bertanggung jawab penuh atas kepengurusan perseroan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <template x-for="leader in leaders.filter(l => l.group === 'Direksi')" :key="leader.id">
                        <div @click="showDetail(leader)" class="cursor-pointer group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-blue-500 hover:-translate-y-2 relative">
                            <div class="absolute top-4 right-4 z-20 bg-black/60 backdrop-blur-sm text-white text-xs px-3 py-1.5 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Lihat Biodata
                            </div>
                            <div class="relative h-96 overflow-hidden bg-gray-200">
                                <img :src="leader.image" :alt="leader.name" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-950/90 via-transparent to-transparent opacity-80"></div>
                                <div class="absolute bottom-4 left-0 w-full text-center px-4">
                                    <span class="inline-block px-3 py-1 bg-blue-500 text-white text-xs font-bold rounded-full mb-2 uppercase" x-text="leader.role"></span>
                                </div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-blue-950 mb-1 group-hover:text-blue-600 transition-colors" x-text="leader.name"></h3>
                                <p class="text-gray-500 text-sm" x-text="leader.role"></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <div x-show="openModal" 
             style="display: none;"
             class="fixed inset-0 z-[60] overflow-y-auto"
             role="dialog" 
             aria-modal="true">
            
            <div x-show="openModal"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-gray-900/80 backdrop-blur-sm transition-opacity"
                 @click="openModal = false"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div x-show="openModal"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-5xl">
                    
                    <button @click="openModal = false" class="absolute top-4 right-4 z-10 p-2 bg-white/50 hover:bg-white rounded-full text-gray-500 hover:text-red-500 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>

                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-2/5 h-64 md:h-auto bg-gray-100 relative">
                            <img :src="activeProfile.detailImage" :alt="activeProfile.name" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-950/80 to-transparent md:hidden"></div>
                            <div class="absolute bottom-4 left-4 md:hidden text-white">
                                <h3 class="text-xl font-bold" x-text="activeProfile.name"></h3>
                                <p class="text-sm opacity-90" x-text="activeProfile.role"></p>
                            </div>
                        </div>

                        <div class="md:w-3/5 p-8 md:p-10 bg-white">
                            <div class="hidden md:block mb-6">
                                <h2 class="text-3xl font-extrabold text-blue-950 mb-1" x-text="activeProfile.name"></h2>
                                <p class="text-teal-600 font-bold text-lg uppercase tracking-wide" x-text="activeProfile.role"></p>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <h4 class="flex items-center text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                        Profil Singkat
                                    </h4>
                                    <p class="text-gray-700 leading-relaxed text-sm md:text-base" x-text="activeProfile.bio"></p>
                                </div>

                                <div>
                                    <h4 class="flex items-center text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                                        Pendidikan
                                    </h4>
                                    <ul class="space-y-2">
                                        <template x-for="edu in activeProfile.education">
                                            <li class="flex items-start text-sm text-gray-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-teal-500 mt-1.5 mr-2 shrink-0"></span>
                                                <span x-text="edu"></span>
                                            </li>
                                        </template>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="flex items-center text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                        Riwayat Jabatan
                                    </h4>
                                    <ul class="space-y-2">
                                        <template x-for="job in activeProfile.career">
                                            <li class="flex items-start text-sm text-gray-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 mr-2 shrink-0"></span>
                                                <span x-text="job"></span>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>