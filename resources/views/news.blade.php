<x-layout>
    <x-slot:title>Berita & Artikel</x-slot>

    <div class="bg-gradient-to-r from-blue-950 to-blue-900 py-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Berita Terkini</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto mb-10">
                Informasi terbaru seputar aktivitas korporat, CSR, dan inovasi teknologi dari PLN Nusa Daya.
            </p>

            <form action="{{ route('news.index') }}" method="GET" class="max-w-xl mx-auto relative">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="relative flex items-center">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari berita..." 
                           class="w-full pl-6 pr-14 py-4 rounded-full border-none focus:ring-4 focus:ring-teal-500/30 shadow-xl text-gray-800 placeholder-gray-400">
                    <button type="submit" class="absolute right-2 bg-teal-500 text-white p-2.5 rounded-full hover:bg-teal-600 transition shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
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
                                'Berita Utama' => 'bg-green-100 text-green-800',
                                'Info Terkini' => 'bg-yellow-100 text-yellow-800',
                                'Siaran Pers' => 'bg-blue-100 text-blue-800',
                                'Kegiatan' => 'bg-purple-100 text-purple-800',
                                default => 'bg-gray-100 text-gray-800',
                            };
                            
                            $imageUrl = $post->image ? asset('storage/' . $post->image) : asset('img/logo-pln-nusaDaya.png');
                        @endphp

                        <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full hover:-translate-y-1 group">
                            
                            <div class="relative h-56 overflow-hidden bg-gray-100 flex justify-center items-center">
                                <img src="{{ $imageUrl }}" alt="{{ $post->title }}" class="w-full h-full {{ $post->image ? 'object-cover' : 'object-contain p-8 opacity-50' }} transform group-hover:scale-110 transition duration-700">
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide {{ $badgeColor }} shadow-sm">
                                        {{ $post->category }}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex items-center gap-2 mb-3 text-gray-400 text-xs font-medium">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->translatedFormat('d F Y') }}
                                </div>
                                
                                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-teal-600 transition-colors">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        {{ Str::limit($post->title, 60) }}
                                    </a>
                                </h3>
                                
                                <p class="text-gray-600 text-sm line-clamp-3 mb-6 flex-grow">
                                    {{ $post->excerpt }}
                                </p>
                                
                                <div class="mt-auto">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center text-teal-600 font-bold text-sm hover:text-teal-800 transition">
                                        Baca Selengkapnya <span class="ml-1 group-hover:translate-x-1 transition-transform">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links() }}
                </div>

            @else
                <div class="text-center py-20">
                    <div class="bg-gray-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Belum ada berita yang diterbitkan.</h3>
                    <p class="text-gray-500 mt-2">Berita yang ditambahkan melalui Admin Panel akan otomatis muncul di sini.</p>
                    @if(request('search') || request('category'))
                        <a href="{{ route('news.index') }}" class="inline-block mt-6 text-teal-600 font-bold hover:underline">Reset Pencarian</a>
                    @endif
                </div>
            @endif
        </div>
    </section>
</x-layout>