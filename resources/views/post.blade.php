<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot>

    <section class="relative bg-blue-900 pt-32 pb-20 px-4 text-center text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
             <img src="{{ $post->image }}" alt="" class="w-full h-full object-cover blur-sm">
        </div>
        <div class="relative z-10 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-yellow-500 text-blue-900 text-xs font-bold uppercase tracking-wider mb-4">
                {{ $post->category }}
            </span>
            <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4">{{ $post->title }}</h1>
            <p class="text-blue-200">
                Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-xl mb-10 h-[400px] md:h-[500px]">
                <img src="{{ $post->image }}" 
                     alt="{{ $post->title }}" 
                     class="w-full h-full object-cover">
            </div>

            <article class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($post->body)) !!}
            </article>

            <div class="mt-12 pt-8 border-t border-gray-100 flex justify-between items-center">
                <a href="/" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                    Kembali ke Beranda
                </a>
                
                <div class="flex gap-2">
                    <span class="text-gray-400 text-sm font-medium mt-1">Bagikan:</span>
                    <button class="text-gray-400 hover:text-blue-600"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></button>
                </div>
            </div>
        </div>
    </section>
</x-layout>