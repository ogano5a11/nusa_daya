<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->circular()
                    ->defaultImageUrl(url('/img/logo-pln-nusaDaya.png')), 
                
                TextColumn::make('title')
                    ->label('Judul Berita')
                    ->searchable()
                    ->limit(40)
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Berita Utama' => 'success',
                        'Info Terkini' => 'warning',
                        'Siaran Pers' => 'info',
                        'Kegiatan' => 'primary',
                        default => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('published_at')
                    ->label('Tgl Publikasi')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('URL Slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Filter Kategori')
                    ->options([
                        'Berita Utama' => 'Berita Utama',
                        'Info Terkini' => 'Info Terkini',
                        'Siaran Pers' => 'Siaran Pers',
                        'Kegiatan' => 'Kegiatan',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}