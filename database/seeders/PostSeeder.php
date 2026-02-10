<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'PLN Nusa Daya Perkuat Digitalisasi Pembangkit di Sulawesi',
            'slug' => 'pln-nusa-daya-perkuat-digitalisasi',
            'excerpt' => 'Transformasi digital dilakukan untuk meningkatkan efisiensi operasional dan monitoring aset secara realtime.',
            'body' => 'Isi berita lengkap disini...',
            'category' => 'Korporat',
            'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Peduli Lingkungan, Pegawai Tanam 1000 Mangrove',
            'slug' => 'peduli-lingkungan-tanam-mangrove',
            'excerpt' => 'Sebagai wujud tanggung jawab sosial lingkungan, PLN Nusa Daya menggelar aksi penanaman mangrove di pesisir.',
            'body' => 'Isi berita lengkap disini...',
            'category' => 'CSR',
            'image' => 'https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Raih Penghargaan K3 Tingkat Nasional 2025',
            'slug' => 'raih-penghargaan-k3-2025',
            'excerpt' => 'Komitmen terhadap keselamatan kerja membuahkan hasil manis dengan diraihnya penghargaan Zero Accident.',
            'body' => 'Isi berita lengkap disini...',
            'category' => 'Penghargaan',
            'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}