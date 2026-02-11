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
            ['title' => 'Board Manual Direksi & Komisaris', 'category' => 'Pedoman GCG', 'year' => 2024],
            ['title' => 'Code of Conduct (Kode Etik)', 'category' => 'Pedoman GCG', 'year' => 2023],
            
            ['title' => 'Laporan Tahunan (Annual Report) 2024', 'category' => 'Laporan Perusahaan', 'year' => 2024],
            ['title' => 'Sustainability Report 2024', 'category' => 'Laporan Perusahaan', 'year' => 2024],
            
            ['title' => 'Piagam Audit Internal', 'category' => 'Kebijakan & Piagam', 'year' => 2025],
            ['title' => 'Piagam Komite Manajemen Risiko', 'category' => 'Kebijakan & Piagam', 'year' => 2024],
            ['title' => 'Pedoman Transparansi Informasi', 'category' => 'Kebijakan & Piagam', 'year' => 2023],
        ];

        foreach ($documents as $doc) {
            DB::table('documents')->insert([
                'title' => $doc['title'],
                'category' => $doc['category'],
                'year' => $doc['year'],
                'file_path' => '#', // Placeholder link download
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}