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
    class="relative w-full h-[90vh] min-h-[600px] flex flex-col bg-gray-900 mt-[-80px] pt-20"> <div class="absolute inset-0 z-0 overflow-hidden">
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
                        <button @click="prev()" class="w-12 h-12 rounded-full border border-white/40 text-white flex items-center justify-center hover:bg-white hover:text-blue-900 transition backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button @click="next()" class="w-12 h-12 rounded-full border border-white/40 text-white flex items-center justify-center hover:bg-white hover:text-blue-900 transition backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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
                    <a :href="slides[active].link" class="inline-flex items-center bg-blue-600 text-white px-8 py-4 rounded-full font-bold hover:bg-blue-700 transition shadow-lg hover:shadow-blue-500/30">
                        Explore Now
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
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

    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-16 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Berkontribusi Membangun Kedaulatan Energi Bangsa</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Sejak 2003, PT PLN Nusa Daya telah menjadi pilar penting dalam memastikan pasokan listrik yang andal di Indonesia Tengah dan Timur. 
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Kami tidak hanya mengelola aset, tetapi juga memastikan setiap investasi infrastruktur kelistrikan memberikan nilai maksimal (Beyond kWh) bagi masyarakat dan industri.
                    </p>
                    <a href="{{ route('about') }}" class="text-blue-600 font-bold hover:text-blue-800 transition flex items-center group text-lg">
                        Profil Perusahaan 
                        <span class="ml-2 transform group-hover:translate-x-2 transition">&rarr;</span>
                    </a>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                             alt="Tim PLN" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-yellow-400 rounded-full -z-10"></div>
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-blue-100 rounded-full -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Solusi Menyeluruh</h2>
                    <p class="text-xl text-gray-600">Ekosistem layanan O&M terpadu untuk kebutuhan infrastruktur Anda.</p>
                </div>
                <a href="{{ route('services') }}" class="hidden md:flex text-blue-600 font-bold hover:text-blue-800 transition items-center">
                    Lihat Semua Layanan <span class="ml-2">&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 group">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">AMC Pembangkit</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Pengoperasian dan pemeliharaan mesin pembangkit untuk efisiensi tinggi dan monitoring aset realtime.</p>
                    <a href="{{ route('services') }}" class="text-blue-600 font-semibold group-hover:text-blue-800">Pelajari detail</a>
                </div>

                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 group">
                    <div class="w-16 h-16 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-yellow-500 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Transmisi & Distribusi</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Layanan inspeksi jaringan, pemeliharaan gardu induk, dan manajemen aset distribusi (Yantek).</p>
                    <a href="{{ route('services') }}" class="text-blue-600 font-semibold group-hover:text-blue-800">Pelajari detail</a>
                </div>

                <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100 group">
                    <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-purple-600 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Beyond kWh (DRUPS)</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">Solusi kualitas daya premium tanpa kedip (Zero Downtime) dan pelayanan manajemen pelanggan (Billman).</p>
                    <a href="{{ route('services') }}" class="text-blue-600 font-semibold group-hover:text-blue-800">Pelajari detail</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-blue-950 text-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-5/12 z-10">
                    <h2 class="text-4xl font-bold mb-6">Menghubungkan Nusantara</h2>
                    <p class="text-blue-200 text-lg mb-8 leading-relaxed">
                        Kami mengelola jaringan dan infrastruktur yang tersebar luas dari Kalimantan, Sulawesi, hingga kepulauan Maluku dan Papua. Memastikan energi yang setara untuk seluruh pelosok negeri.
                    </p>
                    <a href="{{ route('about') }}" class="inline-block bg-white text-blue-900 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                        Lihat Jangkauan Kami
                    </a>
                </div>
                
                <div class="lg:w-7/12 relative">
                    <img src="{{ asset('img/peta-wilayah.jpg') }}" 
                         alt="Peta Wilayah Kerja PLN Nusa Daya" 
                         class="w-full rounded-2xl shadow-2xl opacity-90 hover:opacity-100 transition duration-500 border-4 border-white/10 filter contrast-125">
                    
                    <div class="absolute inset-0 bg-blue-500/20 blur-3xl -z-10 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Media & Informasi</h2>
                <p class="text-xl text-gray-600">Berita dan pembaruan terkini dari aktivitas perusahaan kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($posts as $post)
                    @php
                        $badgeColor = match($post->category) {
                            'Korporat' => 'bg-blue-100 text-blue-800',
                            'CSR' => 'bg-green-100 text-green-800',
                            'Penghargaan' => 'bg-yellow-100 text-yellow-800',
                            default => 'bg-gray-100 text-gray-800',
                        };
                    @endphp

                    <article class="group cursor-pointer">
                        <div class="overflow-hidden rounded-2xl mb-6 shadow-md relative">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide {{ $badgeColor }}">
                                {{ $post->category }}
                            </span>
                            <span class="text-gray-400 text-sm font-medium">
                                {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d M Y') }}
                            </span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition leading-snug">
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        
                        <p class="text-gray-600 line-clamp-2 text-lg mb-4">
                            {{ $post->excerpt }}
                        </p>
                    </article>
                @endforeach
            </div>
            
            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center text-blue-600 font-bold text-lg hover:text-blue-800 transition">
                    Lihat Indeks Berita
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>