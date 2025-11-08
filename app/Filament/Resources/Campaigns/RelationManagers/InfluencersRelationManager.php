<?php

namespace App\Filament\Resources\Campaigns\RelationManagers;

use App\Filament\Resources\Campaigns\CampaignResource;
use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class InfluencersRelationManager extends RelationManager
{
    protected static string $relationship = 'influencers';

    protected static ?string $title = 'Influencers';

    protected static ?string $modelLabel = 'influencer';

    protected function getTableRecordTitleAttribute(): ?string
    {
        return 'nama';
    }

    protected static ?string $relatedResource = CampaignResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama')
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                ImageColumn::make('path_img')
                    ->label('Foto')
                    ->circular()
                    ->width(100),
                TextColumn::make('followers')
                    ->formatStateUsing(fn($state) => match ($state) {
                        '10000+' => '10.000+',
                        '25000+' => '25.000+',
                        '75000+' => '75.000+',
                        '100000+' => '100.000+',
                        default => $state,
                    }),
                TextColumn::make('kategori')
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
            ])
            ->recordActions([
                DetachAction::make()->modalHeading('Detach Influencer?')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make()
                ])
            ])
            ->headerActions([
                AttachAction::make()
                    ->recordTitle(fn($record) => $record->nama)
                    ->preloadRecordSelect(),
            ]);
    }
}
