<?php

namespace App\Filament\Resources\Influencers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

class InfluencersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                ImageColumn::make('path_img')
                    ->label('Foto')
                    ->width(100)
                    ->circular(),
                TextColumn::make('SocialAkuns.platform')
                    ->label('Platform')
                    ->formatStateUsing(fn($state) => match ($state) {
                        'instagram' => 'Instagram',
                        'tiktok' => 'Tiktok',
                        'facebook' => 'Facebook',
                        'youtube' => 'YouTube',
                        default => '-',
                    }),
                TextColumn::make('SocialAkuns.url')
                    ->label('Akun Sosial')
                    ->limit(20),
                TextColumn::make('kategori')
                    ->searchable()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'beauty' => 'Beauty',
                        'fashion' => 'Fashion',
                        'food' => 'Food',
                        'travel' => 'Travel',
                        'gaming' => 'Gaming',
                        'tech' => 'Tech',
                        'lifestyle' => 'Lifestyle',
                        'education' => 'Education',
                        'health' => 'Health & Fitness',
                        'entertainment' => 'Entertainment',
                        default => $state,
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
