<x-layout>
    <x-slot:title>Tata Kelola Perusahaan</x-slot>

    <section class="relative bg-blue-900 h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 alt="Governance" 
                 class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900 via-blue-900/60 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Tata Kelola Perusahaan</h1>
            <p class="text-xl text-blue-200 max-w-2xl mx-auto">
                Komitmen kami terhadap transparansi, akuntabilitas, dan integritas dalam setiap aktivitas bisnis.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row items-center">
                <div class="p-10 md:w-2/3 text-white">
                    <h2 class="text-3xl font-bold mb-4 flex items-center">
                        <svg class="w-8 h-8 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        Whistle Blowing System (WBS)
                    </h2>
                    <p class="text-blue-100 mb-6 leading-relaxed">
                        Kami menyediakan saluran pengaduan bagi pihak internal maupun eksternal untuk melaporkan indikasi pelanggaran. Identitas pelapor dijamin kerahasiaannya.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="mailto:wbs@pln-t.co.id" class="bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-bold hover:bg-yellow-400 transition flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Kirim Laporan WBS
                        </a>
                        <a href="#" class="border border-white text-white px-6 py-3 rounded-lg font-bold hover:bg-white hover:text-blue-900 transition">
                            Unduh Panduan WBS
                        </a>
                    </div>
                </div>
                <div class="hidden md:block md:w-1/3 h-full">
                    <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         class="w-full h-full object-cover opacity-50 mix-blend-overlay" alt="Security">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Dokumen Publik</h2>
                <p class="text-gray-600 mt-2">Unduh dokumen tata kelola, laporan, dan kebijakan perusahaan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach($documents as $category => $docs)
                <div class="bg-white rounded-xl shadow-md overflow-hidden border-t-4 border-blue-600 hover:-translate-y-1 transition duration-300">
                    <div class="p-6 bg-blue-50 border-b border-blue-100 flex justify-between items-center">
                        <h3 class="font-bold text-lg text-blue-900">{{ $category }}</h3>
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    
                    <ul class="divide-y divide-gray-100">
                        @foreach($docs as $doc)
                        <li class="p-4 hover:bg-gray-50 flex justify-between items-center group">
                            <div>
                                <p class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition">{{ $doc->title }}</p>
                                <span class="text-xs text-gray-400">Tahun: {{ $doc->year }}</span>
                            </div>
                            <a href="{{ $doc->file_path }}" class="bg-gray-100 text-gray-500 p-2 rounded-full hover:bg-blue-600 hover:text-white transition" title="Download">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>