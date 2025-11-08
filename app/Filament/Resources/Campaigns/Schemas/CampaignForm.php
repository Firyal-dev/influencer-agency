<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CampaignForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                FileUpload::make('path_img')
                    ->label('Foto')
                    ->image()
                    ->directory('campaign_img'),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('budget')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'aktif' => 'Aktif',
                        'selesai' => 'Selesai',
                    ])
                    ->required(),
                Select::make('brand_id')
                    ->label('Brand')
                    ->required()
                    ->relationship('brand', 'nama_brand'),
            ]);
    }
}
