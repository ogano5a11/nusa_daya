<?php

namespace App\Filament\Resources\Documents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DocumentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Dokumen')
                    ->searchable()
                    ->limit(40)
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pedoman GCG' => 'success',
                        'Kepatuhan & SMAP' => 'warning',
                        'Laporan Perusahaan' => 'info',
                        'Kebijakan & Piagam' => 'primary',
                        default => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('file_path')
                    ->label('File PDF')
                    ->formatStateUsing(fn () => 'Lihat PDF') 
                    ->url(fn ($record) => asset('storage/' . $record->file_path)) 
                    ->openUrlInNewTab() 
                    ->color('primary'),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Filter Kategori')
                    ->options([
                        'Pedoman GCG' => 'Pedoman GCG',
                        'Kepatuhan & SMAP' => 'Kepatuhan & SMAP',
                        'Laporan Perusahaan' => 'Laporan Perusahaan',
                        'Kebijakan & Piagam' => 'Kebijakan & Piagam',
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