<?php

namespace App\Filament\Resources\Brands\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

class BrandsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_brand')
                    ->searchable(),
                TextColumn::make('deskripsi_brand')
                    ->searchable()
                    ->limit(50)
                    ->label('Deskripsi'),
                ImageColumn::make('path_img')
                    ->label('Foto')
                    ->width(100)
                    ->circular(),
                TextColumn::make('industri')
                    ->searchable()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'beauty & skincare' => 'Beauty & Skincare',
                        'fashion & apparel' => 'Fashion & Apparel',
                        'food & beverage' => 'Food & Beverage',
                        'tech & rlectronics' => 'Tech & Electronics',
                        'gaming & rntertainment' => 'Gaming & Entertainment',
                        'travel & hospitality' => 'Travel & Hospitality',
                        'health & fitness' => 'Health & Fitness',
                        'finance & banking' => 'Finance & Banking',
                        'education & e-Learning' => 'Education & E-Learning',
                        'automotive' => 'Automotive',
                        'home & living' => 'Home & Living',
                        'e-commerce / retail' => 'E-commerce / Retail',
                        'telecommunication' => 'Telecommunication',
                        'nonprofit / ngo / social' => 'Nonprofit / NGO / Social',
                        'real Estate / property' => 'Real Estate / Property',
                        'luxury / lifestyle' => 'Luxury / Lifestyle',
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
