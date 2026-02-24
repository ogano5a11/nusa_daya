<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot>

    @php
        $imageUrl = $post->image ? asset('storage/' . $post->image) : asset('img/logo-pln-nusaDaya.png');
    @endphp

    <section class="relative bg-pln-dark pt-36 pb-28 px-4 text-center text-white overflow-hidden mt-[-80px]">
        <div class="absolute inset-0 z-0">
             <img src="{{ $imageUrl }}" alt="" class="w-full h-full object-cover opacity-20 blur-sm">
             <div class="absolute inset-0 bg-gradient-to-t from-pln-dark via-pln-dark/80 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto flex flex-col items-center mt-6">
            <span class="inline-block py-1.5 px-5 rounded-full bg-pln-yellow text-pln-dark text-xs font-extrabold uppercase tracking-widest mb-6 shadow-lg">
                {{ $post->category }}
            </span>
            
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6 text-white">{{ $post->title }}</h1>
            
            <p class="text-white/80 font-medium flex items-center gap-2">
                <svg class="w-5 h-5 text-pln-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Diposting pada {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->translatedFormat('d F Y') }}
            </p>
        </div>
    </section>

    <section class="py-16 bg-white relative z-20 -mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="rounded-3xl overflow-hidden shadow-2xl mb-12 h-[400px] md:h-[500px] bg-gray-50 flex justify-center items-center border-4 border-white group">
                <img src="{{ $imageUrl }}" 
                     alt="{{ $post->title }}" 
                     class="w-full h-full {{ $post->image ? 'object-cover' : 'object-contain p-16 opacity-50' }} group-hover:scale-105 transition-transform duration-700 ease-in-out">
            </div>

            <article class="prose prose-lg max-w-none text-gray-700 leading-loose 
                            prose-headings:text-pln-dark prose-headings:font-bold 
                            prose-a:text-pln-primary prose-a:no-underline hover:prose-a:underline 
                            prose-img:rounded-2xl prose-img:shadow-md">
                {!! $post->body !!}
            </article>

            <div class="mt-16 pt-8 border-t-2 border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                
                <a href="{{ route('news.index') }}" class="inline-flex items-center text-pln-primary font-bold hover:text-pln-dark transition-colors group bg-pln-primary/5 px-6 py-3 rounded-full hover:bg-pln-primary/10">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                    Kembali ke Daftar Berita
                </a>
                
                <div class="flex gap-3 items-center">
                    <span class="text-gray-400 font-bold text-sm tracking-widest uppercase mr-2">Bagikan:</span>
                    
                    <button class="bg-gray-50 border border-gray-100 p-3 rounded-full text-gray-400 hover:bg-pln-primary hover:text-white hover:border-pln-primary transition-all duration-300 transform hover:-translate-y-1 shadow-sm hover:shadow-md" title="Share to Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </button>
                    
                    <button class="bg-gray-50 border border-gray-100 p-3 rounded-full text-gray-400 hover:bg-pln-primary hover:text-white hover:border-pln-primary transition-all duration-300 transform hover:-translate-y-1 shadow-sm hover:shadow-md" title="Share to X (Twitter)">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </button>
                    
                    <button class="bg-gray-50 border border-gray-100 p-3 rounded-full text-gray-400 hover:bg-pln-primary hover:text-white hover:border-pln-primary transition-all duration-300 transform hover:-translate-y-1 shadow-sm hover:shadow-md" title="Copy Link">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </button>
                </div>
                
            </div>
        </div>
    </section>
</x-layout>