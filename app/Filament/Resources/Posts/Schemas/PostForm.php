<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Utama Berita')
                    ->description('Masukkan detail utama dari artikel atau berita.')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Judul Berita')
                                ->required()
                                ->live(onBlur: true) 
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))), 
                            
                            TextInput::make('slug')
                                ->label('Slug (URL)')
                                ->required()
                                ->readOnly() 
                                ->unique(ignoreRecord: true), 
                        ]),

                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Berita Utama' => 'Berita Utama',
                                'Info Terkini' => 'Info Terkini',
                                'Siaran Pers' => 'Siaran Pers',
                                'Kegiatan' => 'Kegiatan',
                            ])
                            ->required(),

                        Textarea::make('excerpt')
                            ->label('Ringkasan Singkat (Excerpt)')
                            ->rows(3)
                            ->required()
                            ->columnSpanFull(),

                        RichEditor::make('body')
                            ->label('Isi Berita Lengkap')
                            ->required()
                            ->toolbarButtons([
                                'blockquote', 'bold', 'bulletList', 'h2', 'h3', 'italic', 
                                'link', 'orderedList', 'redo', 'strike', 'underline', 'undo',
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Media & Publikasi')
                    ->description('Atur gambar thumbnail dan waktu terbit berita.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Utama (Thumbnail)')
                            ->image()
                            ->directory('posts') 
                            ->columnSpanFull(),

                        DateTimePicker::make('published_at')
                            ->label('Waktu Publikasi')
                            ->default(now()),
                    ])->collapsible(), 
            ]);
    }
}