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

    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <img class="h-10 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/2/20/Logo_PLN.svg" alt="PLN Logo">
                    <div>
                        <h1 class="text-xl font-bold text-blue-900 leading-none">PLN NUSA DAYA</h1>
                        <p class="text-xs text-blue-500 font-semibold tracking-widest">POWERING SOLUTIONS</p>
                    </div>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">Tentang Kami</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">Layanan Bisnis</a>
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

    <main class="flex-grow pt-20">
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
                    <li><a href="#" class="hover:text-white">O&M Pembangkit</a></li>
                    <li><a href="#" class="hover:text-white">Transmisi & Distribusi</a></li>
                    <li><a href="#" class="hover:text-white">ListriQu</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-cyan-400">Perusahaan</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white">Profil Direksi</a></li>
                    <li><a href="#" class="hover:text-white">Tata Kelola (GCG)</a></li>
                    <li><a href="#" class="hover:text-white">Karir</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-cyan-400">Kontak</h4>
                <p class="text-sm text-gray-300 mb-2">Balikpapan, Kalimantan Timur</p>
                <p class="text-sm text-gray-300">plnnd@plnnusadaya.co.id</p>
            </div>
        </div>
        <div class="border-t border-blue-800 pt-6 text-center text-sm text-gray-400">
            &copy; {{ date('Y') }} PT PLN Nusa Daya. All rights reserved.
        </div>
    </footer>

</body>
</html>