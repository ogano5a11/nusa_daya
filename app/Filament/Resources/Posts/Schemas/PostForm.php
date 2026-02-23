<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([

                Group::make()->schema([
                    
                    Section::make('Detail Utama Berita')
                        ->schema([
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

                            Textarea::make('excerpt')
                                ->label('Ringkasan Singkat (Excerpt)')
                                ->rows(3)
                                ->required()
                                ->columnSpanFull(),
                        ])->columns(2),

                    Section::make('Isi Berita Lengkap')
                        ->schema([
                            RichEditor::make('body')
                                ->hiddenLabel() 
                                ->required()
                                ->toolbarButtons([
                                    'blockquote', 'bold', 'bulletList', 'h2', 'h3', 'italic', 
                                    'link', 'orderedList', 'redo', 'strike', 'underline', 'undo',
                                ])
                        ]),
                        
                ])->columnSpan(['lg' => 2]),
                Group::make()->schema([
                    
                    Section::make('Kategori Berita')
                        ->schema([
                            Select::make('category')
                                ->hiddenLabel()
                                ->options([
                                    'Berita Utama' => 'Berita Utama',
                                    'Info Terkini' => 'Info Terkini',
                                    'Siaran Pers' => 'Siaran Pers',
                                    'Kegiatan' => 'Kegiatan',
                                ])
                                ->required(),
                        ]),

                    Section::make('Media & Publikasi')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Gambar Utama')
                                ->image()
                                ->directory('posts') 
                                ->columnSpanFull(),

                            DateTimePicker::make('published_at')
                                ->label('Waktu Publikasi')
                                ->default(now()),
                        ]),
                        
                ])->columnSpan(['lg' => 1]),
                
            ]);
    }
}