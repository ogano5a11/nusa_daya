<x-layout>
    <x-slot:title>Tata Kelola Perusahaan</x-slot>

    <section class="relative bg-pln-dark h-[350px] flex items-center justify-center overflow-hidden pt-20 mt-[-80px]">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Governance" 
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-pln-dark via-pln-dark/80 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center text-white px-4 mt-8">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Tata Kelola Perusahaan</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">
                Komitmen kami terhadap transparansi, akuntabilitas, dan integritas dalam setiap aktivitas bisnis untuk mewujudkan <span class="text-pln-yellow font-bold">Good Corporate Governance</span>.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white border-b border-gray-100 relative -mt-10 z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-pln-dark rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row items-center relative border-t-4 border-pln-yellow">
                
                <div class="absolute top-0 right-0 w-64 h-64 bg-pln-primary/20 rounded-bl-full -mr-10 -mt-10 pointer-events-none"></div>
                
                <div class="p-10 lg:p-12 md:w-2/3 text-white relative z-10">
                    <h2 class="text-3xl lg:text-4xl font-extrabold mb-4 flex items-center">
                        <svg class="w-10 h-10 mr-4 text-pln-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        Whistle Blowing System (WBS)
                    </h2>
                    <p class="text-white/80 mb-8 text-lg leading-relaxed max-w-xl">
                        Kami menyediakan saluran pengaduan resmi bagi pihak internal maupun eksternal untuk melaporkan indikasi pelanggaran. Identitas Anda sebagai pelapor dijamin kerahasiaannya.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="mailto:wbs@plnnusadaya.co.id" class="bg-pln-yellow text-pln-dark px-8 py-3.5 rounded-full font-bold hover:bg-white hover:scale-105 transition-all duration-300 flex items-center shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Kirim Laporan WBS
                        </a>
                        <a href="#" class="border-2 border-white/50 text-white px-8 py-3.5 rounded-full font-bold hover:bg-pln-primary hover:border-pln-primary transition-all duration-300">
                            Unduh Panduan WBS
                        </a>
                    </div>
                </div>
                
                <div class="hidden md:block md:w-1/3 h-full relative z-0">
                    <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Security">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block text-pln-primary font-bold tracking-widest uppercase text-sm mb-2">Transparansi</span>
                <h2 class="text-4xl font-extrabold text-pln-dark">Dokumen Publik</h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Akses pedoman tata kelola, laporan tahunan, dan kebijakan perusahaan kami yang diterbitkan secara berkala.</p>
            </div>

            @if($documents->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($documents as $category => $docs)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden border-t-4 border-pln-primary hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group/card">
                        
                        <div class="p-6 bg-pln-primary/5 border-b border-pln-primary/10 flex justify-between items-center group-hover/card:bg-pln-primary/10 transition-colors">
                            <h3 class="font-bold text-xl text-pln-dark">{{ $category }}</h3>
                            <div class="bg-white w-10 h-10 rounded-full shadow-sm flex items-center justify-center text-pln-primary group-hover/card:bg-pln-primary group-hover/card:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                        </div>
                        
                        <ul class="divide-y divide-gray-100">
                            @foreach($docs as $doc)
                            <li class="p-5 hover:bg-gray-50 flex justify-between items-center group/item transition-colors">
                                <div class="pr-4">
                                    <p class="text-sm font-bold text-gray-800 group-hover/item:text-pln-primary transition-colors leading-tight mb-2">{{ $doc->title }}</p>
                                    <span class="text-xs font-bold text-gray-500 bg-gray-100 px-2.5 py-1 rounded-md">Tahun: {{ $doc->year }}</span>
                                </div>
                                <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="flex-shrink-0 bg-gray-100 text-gray-400 p-3 rounded-full hover:bg-pln-primary hover:text-white hover:shadow-md transition-all duration-300 hover:scale-110" title="Unduh PDF">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 bg-white rounded-3xl shadow-sm border border-gray-100 max-w-3xl mx-auto">
                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-pln-dark mb-2">Dokumen Belum Tersedia</h3>
                    <p class="text-gray-500 font-medium">Dokumen publik saat ini sedang dalam proses pembaruan. Silakan kembali lagi nanti.</p>
                </div>
            @endif

        </div>
    </section>
</x-layout>