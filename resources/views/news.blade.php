<x-layout>
    <x-slot:title>Berita & Artikel</x-slot>

    <div class="bg-pln-dark pt-36 pb-24 relative overflow-hidden mt-[-80px]">
        <div class="absolute top-0 right-0 w-96 h-96 bg-pln-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-pln-blue/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Berita <span class="text-pln-yellow">Terkini</span>
            </h1>
            <p class="text-white/80 text-lg max-w-2xl mx-auto mb-10">
                Informasi terbaru seputar aktivitas korporat, CSR, dan inovasi teknologi dari PLN Nusa Daya.
            </p>

            <form action="{{ route('news.index') }}" method="GET" class="max-w-xl mx-auto relative group">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="relative flex items-center">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari berita..." 
                           class="w-full pl-8 pr-14 py-4 rounded-full border-2 border-white/10 bg-white/5 backdrop-blur-sm text-white placeholder-white/50 focus:outline-none focus:bg-white focus:text-gray-900 focus:placeholder-gray-400 focus:border-pln-primary focus:ring-4 focus:ring-pln-primary/30 shadow-xl transition-all duration-300">
                    <button type="submit" class="absolute right-2 bg-pln-primary text-white p-3 rounded-full hover:bg-pln-yellow hover:text-pln-dark transition-colors duration-300 shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="py-16 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        @php
                            $badgeColor = match($post->category) {
                                'Berita Utama' => 'bg-pln-primary/20 text-pln-dark',
                                'Info Terkini' => 'bg-pln-yellow/20 text-yellow-800',
                                'Siaran Pers' => 'bg-pln-blue/20 text-pln-dark',
                                'Kegiatan' => 'bg-purple-100 text-purple-800',
                                default => 'bg-gray-100 text-gray-800',
                            };
                            
                            $imageUrl = $post->image ? asset('storage/' . $post->image) : asset('img/logo-pln-nusaDaya.png');
                        @endphp

                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 flex flex-col h-full hover:-translate-y-1.5 group/card">
                            
                            <div class="relative h-56 overflow-hidden bg-gray-100 flex justify-center items-center">
                                <img src="{{ $imageUrl }}" alt="{{ $post->title }}" class="w-full h-full {{ $post->image ? 'object-cover' : 'object-contain p-8 opacity-50' }} transform group-hover/card:scale-110 transition duration-700 ease-in-out">
                                <div class="absolute inset-0 bg-pln-dark/5 group-hover/card:bg-transparent transition duration-500"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wide {{ $badgeColor }} shadow-sm">
                                        {{ $post->category }}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="p-8 flex flex-col flex-grow">
                                <div class="flex items-center gap-2 mb-3 text-gray-400 text-xs font-bold uppercase tracking-widest">
                                    <svg class="w-4 h-4 text-pln-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->translatedFormat('d F Y') }}
                                </div>
                                
                                <h3 class="text-xl font-extrabold text-pln-dark mb-4 leading-snug group-hover/card:text-pln-primary transition-colors">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="focus:outline-none">
                                        <span class="absolute inset-0"></span>
                                        {{ \Illuminate\Support\Str::limit($post->title, 60) }}
                                    </a>
                                </h3>
                                
                                <p class="text-gray-600 text-sm line-clamp-3 mb-6 flex-grow leading-relaxed">
                                    {{ $post->excerpt }}
                                </p>
                                
                                <div class="mt-auto pt-5 border-t border-gray-100 flex justify-between items-center text-pln-primary font-bold text-sm">
                                    <span>BACA SELENGKAPNYA</span>
                                    <span class="bg-pln-primary/10 p-1.5 rounded-full group-hover/card:bg-pln-primary group-hover/card:text-white transition-colors duration-300">
                                        <svg class="w-4 h-4 transform group-hover/card:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-16">
                    {{ $posts->links() }}
                </div>

            @else
                <div class="text-center py-20 bg-white rounded-3xl shadow-sm border border-gray-100 max-w-3xl mx-auto">
                    <div class="bg-gray-50 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6 text-gray-300">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.5-4.5A2 2 0 0012.586 3H12"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-pln-dark mb-2">Belum Ada Berita</h3>
                    <p class="text-gray-500 font-medium max-w-md mx-auto">Berita atau artikel yang dipublikasikan belum tersedia untuk saat ini atau kata kunci tidak ditemukan.</p>
                    @if(request('search') || request('category'))
                        <div class="mt-8">
                            <a href="{{ route('news.index') }}" class="inline-flex items-center px-6 py-3 border-2 border-pln-primary text-pln-primary font-bold rounded-full hover:bg-pln-primary hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                                Reset Pencarian
                            </a>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
</x-layout>