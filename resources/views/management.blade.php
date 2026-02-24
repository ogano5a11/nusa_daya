<x-layout>
    <x-slot:title>Manajemen Perusahaan</x-slot>

    <div class="relative bg-pln-dark py-24 overflow-hidden pt-32 mt-[-80px]">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('img/gambar-bg-profil-1.jpeg') }}" class="w-full h-full object-cover blur-sm" alt="Background">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-pln-dark via-pln-dark/90 to-pln-dark/80"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Jajaran <span class="text-pln-yellow">Manajemen</span></h1>
            <p class="text-white/80 text-lg max-w-2xl mx-auto leading-relaxed">
                Dipimpin oleh para profesional berpengalaman yang berdedikasi untuk mewujudkan visi PT PLN Nusa Daya.
            </p>
        </div>
    </div>

    <div class="bg-gray-50 pb-20" x-data="{ 
        openModal: false,
        activeProfile: {},
        
        leaders: [
            {
                id: 1,
                name: 'Nama Komisaris Utama',
                role: 'Komisaris Utama',
                group: 'Komisaris',
                image: '{{ asset('img/komisaris.png') }}',
                detailImage: '{{ asset('img/komisaris.png') }}',
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
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-4">Dewan Komisaris</h2>
                    <div class="w-24 h-1 bg-pln-yellow mx-auto rounded-full"></div>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                        Melakukan pengawasan dan memberikan nasihat kepada Direksi.
                    </p>
                </div>

                <div class="flex justify-center">
                    <template x-for="leader in leaders.filter(l => l.group === 'Komisaris')" :key="leader.id">
                        <div @click="showDetail(leader)" class="cursor-pointer w-full max-w-sm group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-pln-primary hover:-translate-y-2 relative">
                            <div class="absolute top-4 right-4 z-20 bg-pln-dark/80 backdrop-blur-sm text-pln-yellow text-xs px-4 py-1.5 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1 font-bold tracking-widest uppercase">
                                Lihat Biodata
                            </div>
                            <div class="relative h-96 overflow-hidden bg-gray-50">
                                <img :src="leader.image" :alt="leader.name" class="w-full h-full object-contain p-4 transform group-hover:scale-105 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-pln-dark/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-pln-dark mb-1 group-hover:text-pln-primary transition-colors" x-text="leader.role"></h3> 
                                <p class="text-gray-500 text-sm font-medium">PT PLN Nusa Daya</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50 border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-extrabold text-pln-dark mb-4">Dewan Direksi</h2>
                    <div class="w-24 h-1 bg-pln-primary mx-auto rounded-full"></div>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                        Bertanggung jawab penuh atas kepengurusan perseroan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <template x-for="leader in leaders.filter(l => l.group === 'Direksi')" :key="leader.id">
                        <div @click="showDetail(leader)" class="cursor-pointer group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-pln-primary hover:-translate-y-2 relative">
                            <div class="absolute top-4 right-4 z-20 bg-pln-dark/80 backdrop-blur-sm text-pln-primary text-xs px-4 py-1.5 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1 font-bold tracking-widest uppercase">
                                Lihat Biodata
                            </div>
                            <div class="relative h-96 overflow-hidden bg-gray-200">
                                <img :src="leader.image" :alt="leader.name" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-pln-dark/90 via-pln-dark/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                                <div class="absolute bottom-4 left-0 w-full text-center px-4">
                                    <span class="inline-block px-4 py-1.5 bg-pln-primary text-white text-xs font-bold rounded-full uppercase shadow-md" x-text="leader.role"></span>
                                </div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-extrabold text-pln-dark mb-1 group-hover:text-pln-primary transition-colors" x-text="leader.name"></h3>
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
                 class="fixed inset-0 bg-pln-dark/80 backdrop-blur-md transition-opacity"
                 @click="openModal = false"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div x-show="openModal"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-5xl border-t-8 border-pln-primary">
                    
                    <button @click="openModal = false" class="absolute top-4 right-4 z-10 p-2 bg-gray-100 hover:bg-red-100 rounded-full text-gray-500 hover:text-red-500 transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>

                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-2/5 h-64 md:h-auto bg-gray-100 relative">
                            <img :src="activeProfile.detailImage" :alt="activeProfile.name" class="w-full h-full object-cover object-top">
                            <div class="absolute inset-0 bg-gradient-to-t from-pln-dark/90 to-transparent md:hidden"></div>
                            <div class="absolute bottom-4 left-4 md:hidden text-white">
                                <h3 class="text-xl font-bold" x-text="activeProfile.name"></h3>
                                <p class="text-sm text-pln-yellow font-bold uppercase" x-text="activeProfile.role"></p>
                            </div>
                        </div>

                        <div class="md:w-3/5 p-8 md:p-10 bg-white">
                            <div class="hidden md:block mb-6 border-b border-gray-100 pb-4">
                                <h2 class="text-3xl font-extrabold text-pln-dark mb-1" x-text="activeProfile.name"></h2>
                                <p class="text-pln-primary font-bold text-lg uppercase tracking-wide" x-text="activeProfile.role"></p>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <h4 class="flex items-center text-sm font-extrabold text-pln-dark uppercase tracking-wider mb-2">
                                        <span class="w-2 h-2 bg-pln-yellow rounded-full mr-2"></span>
                                        Profil Singkat
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed text-sm md:text-base" x-text="activeProfile.bio"></p>
                                </div>

                                <div>
                                    <h4 class="flex items-center text-sm font-extrabold text-pln-dark uppercase tracking-wider mb-2">
                                        <span class="w-2 h-2 bg-pln-yellow rounded-full mr-2"></span>
                                        Pendidikan
                                    </h4>
                                    <ul class="space-y-2">
                                        <template x-for="edu in activeProfile.education">
                                            <li class="flex items-start text-sm text-gray-600">
                                                <svg class="w-4 h-4 text-pln-primary mt-0.5 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <span x-text="edu"></span>
                                            </li>
                                        </template>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="flex items-center text-sm font-extrabold text-pln-dark uppercase tracking-wider mb-2">
                                        <span class="w-2 h-2 bg-pln-yellow rounded-full mr-2"></span>
                                        Riwayat Jabatan
                                    </h4>
                                    <ul class="space-y-2">
                                        <template x-for="job in activeProfile.career">
                                            <li class="flex items-start text-sm text-gray-600">
                                                <svg class="w-4 h-4 text-pln-primary mt-0.5 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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