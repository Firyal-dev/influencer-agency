<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CampaignForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Campaign Details')
                    ->schema([
                        TextInput::make('judul')
                            ->required(),
                        Textarea::make('deskripsi')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Status')
                    ->schema([
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
                    ]),
                FileUpload::make('path_img')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('campaign_img'),
            ]);
    }
}
