<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        $documents = [
            ['title' => 'Pedoman Tata Kelola Perusahaan (GCG)', 'category' => 'Pedoman GCG', 'year' => 2024],
            ['title' => 'Code of Conduct (Pedoman Perilaku)', 'category' => 'Pedoman GCG', 'year' => 2024],
            ['title' => 'Piagam Dewan Komisaris (Board Manual)', 'category' => 'Pedoman GCG', 'year' => 2024],
            ['title' => 'Piagam Direksi (Board Manual)', 'category' => 'Pedoman GCG', 'year' => 2024],
            
            ['title' => 'Pedoman Pengendalian Gratifikasi', 'category' => 'Kepatuhan & SMAP', 'year' => 2024],
            ['title' => 'Sistem Manajemen Anti Penyuapan (ISO 37001)', 'category' => 'Kepatuhan & SMAP', 'year' => 2023],
            ['title' => 'Laporan Kepatuhan LHKPN (100% Lapor)', 'category' => 'Kepatuhan & SMAP', 'year' => 2024],
            ['title' => 'Pedoman Whistle Blowing System (WBS)', 'category' => 'Kepatuhan & SMAP', 'year' => 2024],

            ['title' => 'Laporan Tahunan (Annual Report) 2024', 'category' => 'Laporan Perusahaan', 'year' => 2024],
            ['title' => 'Laporan Keberlanjutan (Sustainability Report) 2024', 'category' => 'Laporan Perusahaan', 'year' => 2024],
            
            ['title' => 'Piagam Audit Internal', 'category' => 'Kebijakan & Piagam', 'year' => 2025],
            ['title' => 'Piagam Komite Manajemen Risiko', 'category' => 'Kebijakan & Piagam', 'year' => 2024],
            ['title' => 'Kebijakan Pengembangan Pegawai', 'category' => 'Kebijakan & Piagam', 'year' => 2024],
            ['title' => 'Kebijakan TJSL & Komunikasi Korporat', 'category' => 'Kebijakan & Piagam', 'year' => 2023],
        ];

        foreach ($documents as $doc) {
            DB::table('documents')->insert([
                'title' => $doc['title'],
                'category' => $doc['category'],
                'year' => $doc['year'],
                'file_path' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}