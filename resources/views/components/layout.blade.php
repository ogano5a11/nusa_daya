<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PLN Nusa Daya' }} - Powering The Future</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'pln-primary': '#00A2B9', // Tosca
              'pln-dark': '#035B71',    // Biru Gelap
              'pln-blue': '#00AFF0',    // Biru Muda
              'pln-yellow': '#FFFF00',  // Kuning
              'pln-red': '#FF0000',     // Merah
              'brand-orange': '#FF7F00',
            },
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <header class="fixed w-full z-50 top-0 shadow-sm transition-all duration-300 bg-white group/header" 
            x-data="{ scrolled: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 20)">
        
        <nav class="bg-white transition-all duration-300 relative z-40"
             :class="{ 'h-16 shadow-md': scrolled, 'h-20': !scrolled }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
                <div class="flex justify-between h-full items-center">
                    
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2 group cursor-pointer">
                        <img class="w-auto transition-all duration-300" 
                             :class="{ 'h-8': scrolled, 'h-10': !scrolled }"
                             src="{{ asset('img/logo-pln-nd-warna-full.png') }}" alt="PLN Logo">
                    </a>
                    
                    <div class="hidden md:flex h-full">
                        
                        <div class="group relative inline-block h-full"> 
                            <button class="h-full px-4 flex items-center text-gray-700 font-semibold hover:text-pln-primary transition group-hover:border-b-4 group-hover:border-pln-primary">
                                Profil PLN ND
                                <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-0 mt-0 w-80 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-4 border-pln-primary rounded-b-xl" style="top: 100%;">
                                <div class="flex flex-col py-2">
                                    <a href="{{ route('about') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Profil Perusahaan</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Mengenal lebih dekat PLN Nusa Daya.</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('management') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Direksi & Komisaris</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Struktur kepemimpinan perusahaan.</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('governance') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Tata Kelola (GCG)</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Pedoman Good Corporate Governance.</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('subsidiaries') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Anak Perusahaan</h4>
                                            <p class="text-xs text-gray-500 leading-snug">PT Paguntaka Cahaya Nusantara.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="group relative inline-block h-full"> 
                            <a href="{{ route('services') }}" class="h-full px-4 flex items-center text-gray-700 font-semibold hover:text-pln-primary transition group-hover:border-b-4 group-hover:border-pln-primary">
                                Layanan Bisnis
                                <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                            <div class="absolute left-0 mt-0 w-80 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-4 border-pln-primary rounded-b-xl" style="top: 100%;">
                                <div class="flex flex-col py-2">
                                    
                                    <a href="{{ route('services.amc-pembangkit') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">AMC Pembangkit</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Operasi & Pemeliharaan Mesin.</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('services.transmisi-distribusi') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Transmisi & Distribusi</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Pemeliharaan Jaringan & Yantek.</p>
                                        </div>
                                    </a>
                                    
                                    <a href="{{ route('services.drups') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">DRUPS & Beyond kWh</h4>
                                            <p class="text-xs text-gray-500 leading-snug">Daya Tanpa Kedip & Inovasi.</p>
                                        </div>
                                    </a>

                                    <a href="{{ route('services.pelanggan') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-pln-primary/5 transition group/link border-b border-gray-50 last:border-none">
                                        <div class="bg-pln-primary/10 text-pln-primary p-2.5 rounded-lg group-hover/link:bg-pln-primary group-hover/link:text-white transition shrink-0">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover/link:text-pln-dark text-sm mb-0.5">Pelayanan Pelanggan</h4>
                                            <p class="text-xs text-gray-500 leading-snug">ListriQu, Cater & Manajemen.</p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <a href="#" class="h-full px-4 flex items-center text-gray-700 font-semibold hover:text-pln-primary transition hover:border-b-4 hover:border-pln-primary">Pengadaan</a>
                        <a href="{{ route('news.index') }}" class="h-full px-4 flex items-center text-gray-700 font-semibold hover:text-pln-primary transition hover:border-b-4 hover:border-pln-primary">Berita</a>

                    </div>

                    <div class="hidden md:flex items-center gap-4">
                        <button class="text-gray-500 hover:text-pln-primary transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <a href="#" class="bg-pln-primary text-white px-6 py-2 rounded-full font-bold hover:bg-pln-dark transition duration-300 shadow-md shadow-pln-primary/30 border border-pln-primary hover:border-pln-dark">
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

    <footer class="relative bg-gradient-to-b from-pln-primary to-gray-900 text-white pt-16 pb-8 overflow-hidden border-t-4 border-pln-yellow mt-20">
        
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-pln-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 -left-24 w-72 h-72 bg-pln-blue/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-12">
                
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="p-1.5 rounded-lg">
                            <img class="h-10 w-auto" src="{{ asset('img/logo-pln-nd-tulisan-putih.png') }}" alt="PLN Logo">
                        </div>
                    </div>
                    <p class="text-white/80 text-sm leading-relaxed pr-4">
                        Menjadi Perusahaan Pengelola Aset Ketenagalistrikan Terkemuka di Wilayah Tengah dan Timur Indonesia yang profesional, inovatif, dan tumbuh berkelanjutan.
                    </p>
                    
                    <div class="flex items-center gap-3 pt-2">
                        <a href="https://instagram.com/officialplnnd" target="_blank" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/80 hover:bg-pln-yellow hover:text-pln-dark hover:border-pln-yellow transition-all duration-300 transform hover:-translate-y-1" title="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://x.com/plnnusadaya" target="_blank" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/80 hover:bg-pln-yellow hover:text-pln-dark hover:border-pln-yellow transition-all duration-300 transform hover:-translate-y-1" title="X">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/plnnusadaya" target="_blank" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/80 hover:bg-pln-yellow hover:text-pln-dark hover:border-pln-yellow transition-all duration-300 transform hover:-translate-y-1" title="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@officialplnnd" target="_blank" class="w-9 h-9 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/80 hover:bg-pln-yellow hover:text-pln-dark hover:border-pln-yellow transition-all duration-300 transform hover:-translate-y-1" title="YouTube">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div class="lg:col-span-3">
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                        Layanan <span class="ml-2 w-8 h-0.5 bg-pln-yellow rounded"></span>
                    </h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li>
                            <a href="{{ route('services.amc-pembangkit') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">AMC Pembangkit</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.transmisi-distribusi') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Transmisi & Distribusi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.drups') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">DRUPS & Beyond kWh</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services.pelanggan') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Pelayanan Pelanggan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                        Perusahaan <span class="ml-2 w-8 h-0.5 bg-pln-yellow rounded"></span>
                    </h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li>
                            <a href="{{ route('about') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Profil Perusahaan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('management') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Direksi & Komisaris</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('governance') }}" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Tata Kelola (GCG)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center hover:text-pln-yellow transition-colors duration-300">
                                <span class="w-1.5 h-1.5 rounded-full bg-pln-yellow mr-3 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"></span>
                                <span class="transform group-hover:translate-x-1 transition-transform duration-300">Karir</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-3">
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                        Kontak <span class="ml-2 w-8 h-0.5 bg-pln-yellow rounded"></span>
                    </h4>
                    
                    <ul class="space-y-5 text-sm text-white/80">
                        <li class="flex items-start gap-3">
                            <div class="mt-1 p-1.5 bg-white/5 rounded-md text-pln-yellow shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <p class="leading-relaxed">
                                Jln. Letjen ZA Maulani RT 41 No 78 Damai Bahagia, Kec. Balikpapan Selatan, Balikpapan - Kalimantan Timur
                            </p>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="p-1.5 bg-white/5 rounded-md text-pln-yellow shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <p>(0542) 8703981 - 8506674</p>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="p-1.5 bg-white/5 rounded-md text-pln-yellow shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <a href="mailto:plnnd@plnnusadaya.co.id" class="hover:text-pln-yellow transition-colors">plnnd@plnnusadaya.co.id</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-white/50 text-center md:text-left">
                    &copy; {{ date('Y') }} PT PLN Nusa Daya. Seluruh hak cipta dilindungi.
                </p>
                <div class="flex gap-6 text-sm text-white/50">
                    <a href="#" class="hover:text-pln-yellow transition-colors">Syarat & Ketentuan</a>
                    <a href="{{ route('privacy') }}" class="hover:text-pln-yellow transition-colors">Kebijakan Privasi</a>
                </div>
            </div>
            
        </div>
    </footer>

</body>
</html>