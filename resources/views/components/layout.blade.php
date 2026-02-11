<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PLN Nusa Daya' }} - Powering The Future</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <header class="fixed w-full z-50 top-0 shadow-lg">
        
        <div class="bg-blue-950 text-white py-2.5 relative z-50 border-b border-blue-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                
                <div class="hidden md:flex items-center space-x-6 text-xs font-medium text-blue-100">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>(0542) 8703981 - (0542) 8506674</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <a href="mailto:plnnd@plnnusadaya.co.id" class="hover:text-white transition">plnnd@plnnusadaya.co.id</a>
                    </div>
                </div>

                <div class="flex items-center gap-4 w-full md:w-auto justify-center md:justify-end">
                    <span class="text-xs font-semibold text-blue-200 hidden md:inline">Ikuti Kami:</span>
                    
                    <a href="https://instagram.com/officialplnnd" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    
                    <a href="https://x.com/plnnusadaya" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="X">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>

                    <a href="https://www.facebook.com/plnnusadaya" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    
                    <a href="https://www.tiktok.com/@pln_nusadaya" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.35-1.17.82-1.45 1.53-.39.98-.29 2.03.36 2.87.62.99 1.76 1.66 2.95 1.74 1.32.12 2.62-.48 3.53-1.44.66-.67.95-1.62 1.05-2.55-.04-5.5-.02-11.03-.02-16.51h-5.08c0 1.5-.02 3 .02 4.5.02.06.04.12.08.18z"/></svg>
                    </a>

                    <a href="https://www.youtube.com/@officialplnnd" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    
                    <a href="https://www.linkedin.com/company/pln-nusa-daya/" target="_blank" class="bg-blue-900 p-1.5 rounded-full hover:bg-yellow-500 hover:text-blue-900 transition duration-300 group" title="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <nav class="bg-white h-20 shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
                <div class="flex justify-between h-full items-center">
                    <div class="flex-shrink-0 flex items-center gap-2">
                        <img class="h-10 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/2/20/Logo_PLN.svg" alt="PLN Logo">
                        <div>
                            <h1 class="text-xl font-bold text-blue-900 leading-none">PLN NUSA DAYA</h1>
                            <p class="text-xs text-blue-500 font-semibold tracking-widest">POWERING SOLUTIONS</p>
                        </div>
                    </div>
                    
                    <div class="hidden md:flex space-x-8">
                        <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
                        <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Tentang Kami</a>
                        <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Layanan Bisnis</a>
                        <a href="{{ route('governance') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Tata Kelola</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">Pengadaan</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">Berita</a>
                    </div>

                    <div class="hidden md:flex">
                        <a href="#" class="bg-blue-600 text-white px-5 py-2.5 rounded-full font-semibold hover:bg-blue-700 transition shadow-lg">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow pt-32">
        {{ $slot }}
    </main>

    <footer class="bg-blue-900 text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-bold mb-4">PLN NUSA DAYA</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Perusahaan Pengelola Aset Ketenagalistrikan Terkemuka di Wilayah Tengah dan Timur Indonesia yang tumbuh berkelanjutan.
                </p>
            </div>
            
            <div>
                <h4 class="font-semibold mb-4 text-cyan-400">Layanan</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition">O&M Pembangkit</a></li>
                    <li><a href="#" class="hover:text-white transition">Transmisi & Distribusi</a></li>
                    <li><a href="#" class="hover:text-white transition">ListriQu</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4 text-cyan-400">Perusahaan</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition">Profil Direksi</a></li>
                    <li><a href="#" class="hover:text-white transition">Tata Kelola (GCG)</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold mb-4 text-cyan-400">Alamat</h4>
                
                <div class="flex items-start gap-3 mb-4">
                    <svg class="w-6 h-6 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        Jln. Letjen ZA Maulani RT 41 No 78 Damai Bahagia, Kec. Balikpapan Selatan, Balikpapan - Kalimantan Timur
                    </p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-blue-800 pt-6 text-center text-sm text-gray-400">
            &copy; {{ date('Y') }} PT PLN Nusa Daya. All rights reserved.
        </div>
    </footer>

</body>
</html>