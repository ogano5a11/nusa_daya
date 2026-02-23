<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi & File Dokumen')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Dokumen')
                            ->required()
                            ->columnSpanFull(),

                        Select::make('category')
                            ->label('Kategori Tata Kelola')
                            ->options([
                                'Pedoman GCG' => 'Pedoman GCG',
                                'Kepatuhan & SMAP' => 'Kepatuhan & SMAP',
                                'Laporan Perusahaan' => 'Laporan Perusahaan',
                                'Kebijakan & Piagam' => 'Kebijakan & Piagam',
                            ])
                            ->required(),

                        TextInput::make('year')
                            ->label('Tahun')
                            ->numeric()
                            ->minValue(2000)
                            ->maxValue(date('Y') + 1)
                            ->default(date('Y')),

                        FileUpload::make('file_path')
                            ->label('Upload File Dokumen (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('documents')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}