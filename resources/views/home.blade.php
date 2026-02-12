<x-layout>
    <x-slot:title>Beranda</x-slot>

    <section x-data="{
        active: 0,
        timer: null,
        slides: [
            {
                title: 'Business',
                label: 'AMC Pembangkit',
                desc: 'Tingkatkan efisiensi dan keandalan mesin pembangkit Anda melalui layanan operasi dan pemeliharaan terbaik kami.',
                link: '{{ route('services') }}',
                img: 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            },
            {
                title: 'Reliability',
                label: 'Transmisi & Distribusi',
                desc: 'Kami memastikan jaringan distribusi dan gardu induk beroperasi optimal untuk meminimalisir gangguan listrik.',
                link: '{{ route('services') }}',
                img: 'https://images.unsplash.com/photo-1544724569-5f546fa602b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            },
            {
                title: 'Innovation',
                label: 'DRUPS & Beyond kWh',
                desc: 'Solusi daya tanpa kedip (Zero Downtime) untuk industri kritis dan layanan pelanggan terintegrasi.',
                link: '{{ route('services') }}',
                img: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            },
            {
                title: 'Society',
                label: 'Penerang Nusantara',
                desc: 'Berkomitmen memberikan akses energi yang merata di seluruh pelosok Indonesia Tengah dan Timur.',
                link: '{{ route('about') }}',
                img: 'https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            }
        ],
        next() {
            this.active = this.active === this.slides.length - 1 ? 0 : this.active + 1;
            this.resetTimer();
        },
        prev() {
            this.active = this.active === 0 ? this.slides.length - 1 : this.active - 1;
            this.resetTimer();
        },
        startTimer() {
            this.timer = setInterval(() => { this.next(); }, 6000);
        },
        resetTimer() {
            clearInterval(this.timer);
            this.startTimer();
        }
    }" 
    x-init="startTimer()"
    class="relative w-full h-[90vh] min-h-[600px] flex flex-col bg-gray-900 mt-[-80px] pt-20"> 
        <div class="absolute inset-0 z-0 overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <img x-show="active === index" 
                     :src="slide.img" 
                     x-transition.opacity.duration.1000ms 
                     class="absolute inset-0 w-full h-full object-cover" alt="Banner">
            </template>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-black/40 to-transparent"></div>
        </div>

        <div class="relative z-10 flex-grow flex flex-col justify-end pb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col md:flex-row md:justify-between md:items-end gap-6">
                
                <div>
                    <h4 class="text-white/80 text-xl font-light mb-1"><span class="text-yellow-400 font-bold">#</span>PoweringTheFuture</h4>
                    <h1 class="text-white text-5xl md:text-6xl font-extrabold tracking-tight">
                        Powering Your <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200" x-text="slides[active].title"></span>
                    </h1>
                </div>

                <div class="flex items-center gap-6 pb-2">
                    <div class="text-white font-bold text-xl">
                        <span class="text-yellow-400 text-3xl" x-text="active + 1"></span> 
                        <span class="text-white/60 text-lg">/ <span x-text="slides.length"></span></span>
                    </div>
                    <div class="flex gap-3">
                        <button @click="prev()" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:bg-yellow-400 hover:border-yellow-400 hover:text-blue-950 hover:scale-105 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button @click="next()" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white flex items-center justify-center hover:bg-yellow-400 hover:border-yellow-400 hover:text-blue-950 hover:scale-105 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="relative z-20 bg-white w-full lg:max-w-[95%] lg:ml-auto lg:rounded-tl-2xl shadow-2xl flex flex-col lg:flex-row border-t-4 border-yellow-400">
            
            <div class="flex-grow p-8 lg:p-12 flex flex-col md:flex-row md:items-center gap-8">
                <div class="flex-grow">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-blue-900 mb-3" x-text="slides[active].label"></h2>
                    <p class="text-gray-600 text-lg max-w-2xl leading-relaxed" x-text="slides[active].desc"></p>
                </div>
                
                <div class="shrink-0 border-t md:border-t-0 md:border-l border-gray-200 pt-6 md:pt-0 md:pl-8">
                    <a :href="slides[active].link" class="inline-flex items-center bg-gradient-to-r from-blue-700 to-blue-500 text-white px-8 py-4 rounded-full font-bold hover:scale-105 hover:shadow-[0_10px_20px_rgba(59,130,246,0.3)] transition-all duration-300 group">
                        Explore Now
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex flex-col justify-center w-80 bg-gray-50 p-8 border-l border-gray-200 lg:rounded-tl-none">
                <p class="text-blue-900 font-extrabold text-lg mb-4">Discover Our Company</p>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 font-medium flex justify-between items-center group transition">
                        Profil Perusahaan
                        <span class="text-gray-300 group-hover:text-blue-600 transform group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                    <hr class="border-gray-200">
                    <a href="{{ route('services') }}" class="text-gray-600 hover:text-blue-600 font-medium flex justify-between items-center group transition">
                        Layanan Bisnis
                        <span class="text-gray-300 group-hover:text-blue-600 transform group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                    <hr class="border-gray-200">
                    <a href="{{ route('governance') }}" class="text-gray-600 hover:text-blue-600 font-medium flex justify-between items-center group transition">
                        Tata Kelola (GCG)
                        <span class="text-gray-300 group-hover:text-blue-600 transform group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative z-40 -mt-12 md:-mt-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] py-10 px-8 border border-gray-100 backdrop-blur-xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 divide-y md:divide-y-0 md:divide-x divide-gray-100">
                <div class="text-center pt-4 md:pt-0">
                    <p class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-1">22<span class="text-teal-500">+</span></p>
                    <p class="text-xs md:text-sm font-bold text-gray-400 uppercase tracking-widest">Tahun Pengalaman</p>
                </div>
                <div class="text-center pt-4 md:pt-0">
                    <p class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-1">335<span class="text-teal-500">+</span></p>
                    <p class="text-xs md:text-sm font-bold text-gray-400 uppercase tracking-widest">Proyek Dikelola</p>
                </div>
                <div class="text-center pt-4 md:pt-0">
                    <p class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-1">5<span class="text-teal-500"></span></p>
                    <p class="text-xs md:text-sm font-bold text-gray-400 uppercase tracking-widest">Pulau Dilayani</p>
                </div>
                <div class="text-center pt-4 md:pt-0 flex flex-col justify-center">
                    <div class="flex items-center justify-center gap-2 mb-1">
                        <span class="relative flex h-4 w-4">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-4 w-4 bg-teal-500"></span>
                        </span>
                        <p class="text-4xl md:text-5xl font-extrabold text-blue-950">24<span class="text-teal-500">/7</span></p>
                    </div>
                    <p class="text-xs md:text-sm font-bold text-gray-400 uppercase tracking-widest">Siaga Operasi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="py-28 bg-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
             x-data="{ 
                activeTab: 1,
                items: [
                    {
                        id: 1,
                        title: 'Mengelola 50+ Pembangkit Tersebar',
                        desc: 'Dari kepulauan terluar hingga pusat industri, kami memastikan mesin pembangkit beroperasi dengan keandalan (EAF) tinggi untuk menjaga pasokan energi nasional.',
                        img: 'https://images.unsplash.com/photo-1581093588401-fbb62a02f120?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'
                    },
                    {
                        id: 2,
                        title: 'Memelihara Ribuan Kilo Jaringan',
                        desc: 'Menembus hutan dan melintasi sungai, tim teknis kami menjaga urat nadi transmisi dan distribusi (JTM/JTR) agar bebas dari gangguan kritis.',
                        img: 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'
                    },
                    {
                        id: 3,
                        title: 'Hadirkan Solusi Daya Tanpa Kedip',
                        desc: 'Melalui sistem DRUPS (Diesel Rotary Uninterruptible Power Supply), kami melindungi fasilitas vital seperti rumah sakit dan data center dari kedipan listrik sedetik pun.',
                        img: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'
                    }
                ]
             }">
             
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                
                <div class="lg:w-1/2 flex flex-col">
                    <span class="inline-block text-teal-600 font-bold tracking-widest uppercase text-sm mb-4">PLN Nusa Daya Untuk Indonesia</span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-6 leading-tight">Membangun Kedaulatan Energi Bangsa</h2>
                    <p class="text-lg text-gray-500 mb-10 leading-relaxed pr-4">
                        Kami telah berkontribusi membangun infrastruktur kelistrikan terbaik di wilayah Indonesia Tengah dan Timur untuk mewujudkan pertumbuhan ekonomi yang setara.
                    </p>
                    
                    <div class="flex flex-col space-y-2 mt-4 relative">
                        <div class="absolute left-0 top-2 bottom-2 w-1 bg-gray-100 rounded-full"></div>

                        <template x-for="item in items" :key="item.id">
                            <div class="relative pl-6 cursor-pointer group" @click="activeTab = item.id">
                                
                                <div class="absolute left-0 top-0 w-1 bg-teal-500 transition-all duration-500 rounded-full"
                                     :class="activeTab === item.id ? 'h-full opacity-100' : 'h-0 opacity-0 group-hover:h-full group-hover:opacity-30'"></div>
                                
                                <h3 class="text-2xl font-bold transition-all duration-300 py-3"
                                    :class="activeTab === item.id ? 'text-blue-950' : 'text-gray-400 group-hover:text-blue-900/70'"
                                    x-text="item.title"></h3>
                                
                                <div x-show="activeTab === item.id" 
                                     x-collapse.duration.500ms
                                     class="overflow-hidden">
                                    <p class="text-gray-600 font-medium leading-relaxed pb-6 pt-1" x-text="item.desc"></p>
                                    
                                    <a href="{{ route('about') }}" class="inline-flex items-center text-teal-600 font-bold hover:text-teal-800 transition-colors pb-6 text-sm">
                                        Pelajari Lebih Lanjut
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="lg:w-1/2 w-full h-[600px] relative sticky top-32">
                    <template x-for="item in items" :key="'img-'+item.id">
                        <div class="absolute inset-0 transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]"
                             :class="{ 
                                'opacity-100 z-30 transform scale-100 translate-x-0 translate-y-0': activeTab === item.id,
                                'opacity-60 z-20 transform scale-95 translate-x-8 -translate-y-8': activeTab === (item.id - 1) || (activeTab === 3 && item.id === 1),
                                'opacity-0 z-10 transform scale-90 translate-x-16 -translate-y-16': activeTab !== item.id && activeTab !== (item.id - 1) && !(activeTab === 3 && item.id === 1)
                             }">
                             
                            <div class="w-full h-full rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.2)] border-8 border-white bg-gray-100">
                                <img :src="item.img" :alt="item.title" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>
                            </div>

                        </div>
                    </template>
                </div>
                
            </div>
        </div>
    </section>

    <section class="py-28 bg-gray-50 relative border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-flex items-center justify-center text-teal-600 font-bold tracking-widest uppercase text-sm mb-4">
                    <span class="w-8 h-0.5 bg-teal-600 mr-3"></span> Lini Bisnis Utama <span class="w-8 h-0.5 bg-teal-600 ml-3"></span>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-6">Solusi Terintegrasi</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Menghadirkan layanan pengelolaan aset ketenagalistrikan yang komprehensif, andal, dan berstandar internasional dari hulu ke hilir.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="{{ asset('img/gambar-services-pembangkit.jpg') }}"
                         alt="AMC Pembangkit" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>

                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">AMC Pembangkit</h3>
                        
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Pengoperasian dan pemeliharaan mesin pembangkit untuk efisiensi tinggi, penjagaan EAF, dan monitoring aset secara realtime.
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="AMC Transmisi" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">AMC Transmisi</h3>
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Jasa operasi dan pemeliharaan Gardu Induk (GI) serta aset transmisi untuk menjamin keandalan penyaluran listrik tegangan tinggi.
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="{{ asset('img/gambar-services-pembangkit.jpg') }}" alt="AMC Distribusi" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">AMC Distribusi</h3>
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Pemeliharaan jaringan tegangan menengah dan rendah serta layanan teknik (Yantek) untuk kualitas listrik sampai ke pelanggan.
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Penyedia Pembangkit" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">Penyedia Pembangkit</h3>
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Menyediakan layanan penyediaan energi listrik terpadu kapasitas menengah khusus untuk wilayah Indonesia Timur.
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Beyond kWh" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">Beyond kWh</h3>
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Layanan inovatif kelistrikan premium, termasuk teknologi DRUPS untuk jaminan pasokan daya tanpa kedip (Zero Downtime).
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="group relative h-[420px] w-full rounded-3xl overflow-hidden cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Pelayanan Pelanggan" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-950 via-blue-900/60 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 flex flex-col justify-end">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white mb-6 border border-white/20 transform group-hover:-translate-y-2 transition-transform duration-500">
                            <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform duration-500">Pelayanan Pelanggan</h3>
                        <div class="overflow-hidden max-h-0 opacity-0 group-hover:max-h-[150px] group-hover:opacity-100 transition-all duration-700 ease-in-out">
                            <p class="text-blue-100 text-sm leading-relaxed mb-6 border-t border-white/20 pt-4 mt-2">
                                Manajemen pelanggan komprehensif, mulai dari pembacaan meter, penagihan, hingga instalasi pelanggan via ListriQu.
                            </p>
                            <a href="{{ route('services') }}" class="inline-flex items-center text-teal-400 hover:text-white font-bold text-sm tracking-wide uppercase transition-colors">
                                Pelajari Detail <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="inline-flex items-center bg-blue-950 text-white px-8 py-4 rounded-full font-bold hover:bg-teal-600 transition shadow-lg group">
                    Jelajahi Semua Layanan Kami
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

        </div>
    </section>

    <section class="py-28 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-teal-600 font-bold tracking-widest uppercase text-sm mb-2 block">Jangkauan Luas</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-6">Menghubungkan Nusantara</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Kami mengelola jaringan dan infrastruktur yang tersebar luas melintasi pulau-pulau, memastikan keadilan energi untuk kawasan Indonesia Tengah dan Timur.
                </p>
            </div>
            
            <div class="relative max-w-5xl mx-auto">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-100">
                    <img src="{{ asset('img/peta-wilayah.jpg') }}" 
                         alt="Peta Wilayah Kerja PLN Nusa Daya" 
                         class="w-full h-auto object-cover transform hover:scale-[1.02] transition duration-700">
                    
                    <div class="absolute inset-0 bg-blue-900/5 mix-blend-multiply pointer-events-none"></div>
                </div>

                <div class="absolute -left-4 md:-left-12 bottom-10 bg-white p-6 md:p-8 rounded-2xl shadow-xl border border-gray-100 z-10 hidden sm:block">
                    <h4 class="font-bold text-blue-950 text-xl mb-4 border-b-2 border-teal-500 pb-2 inline-block">Area Operasional</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-600 font-medium">
                            <span class="flex h-3 w-3 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span><span class="relative inline-flex rounded-full h-3 w-3 bg-teal-500"></span></span>
                            Kalimantan
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 font-medium">
                            <span class="flex h-3 w-3 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span><span class="relative inline-flex rounded-full h-3 w-3 bg-teal-500"></span></span>
                            Sulawesi
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 font-medium">
                            <span class="flex h-3 w-3 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span><span class="relative inline-flex rounded-full h-3 w-3 bg-teal-500"></span></span>
                            Nusa Tenggara
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 font-medium">
                            <span class="flex h-3 w-3 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span><span class="relative inline-flex rounded-full h-3 w-3 bg-teal-500"></span></span>
                            Maluku & Papua
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-28 bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-950 mb-4">Media & Informasi</h2>
                    <p class="text-lg text-gray-600">Berita dan kabar terbaru dari aktivitas perusahaan kami.</p>
                </div>
                <a href="#" class="inline-flex items-center font-bold text-blue-950 hover:text-teal-600 transition-colors group px-6 py-3 border-2 border-blue-950 hover:border-teal-600 rounded-full">
                    Lihat Semua Berita
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($posts as $post)
                    @php
                        $badgeColor = match($post->category) {
                            'Korporat' => 'bg-blue-100 text-blue-700',
                            'CSR' => 'bg-teal-100 text-teal-700',
                            'Penghargaan' => 'bg-yellow-100 text-yellow-700',
                            default => 'bg-gray-200 text-gray-700',
                        };
                    @endphp

                    <article class="group cursor-pointer flex flex-col h-full bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 hover:-translate-y-1">
                        <div class="overflow-hidden relative h-64 w-full">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 ease-in-out">
                            <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition duration-500"></div>
                            
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide {{ $badgeColor }} shadow-sm">
                                    {{ $post->category }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-8 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 mb-4 text-gray-400 text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
                            </div>
                            
                            <h3 class="text-2xl font-bold text-blue-950 mb-4 group-hover:text-teal-600 transition-colors leading-snug">
                                <a href="{{ route('posts.show', $post->slug) }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $post->title }}
                                </a>
                            </h3>
                            
                            <p class="text-gray-600 line-clamp-3 leading-relaxed mb-6 flex-grow">
                                {{ $post->excerpt }}
                            </p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100 flex items-center text-teal-600 font-bold text-sm">
                                BACA SELENGKAPNYA 
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>