<?php

namespace App\Filament\Resources\Influencers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InfluencerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Influencer Details')
                    ->schema([
                        TextInput::make('nama')
                            ->required(),
                        TextInput::make('email')
                            ->required(),
                        TextInput::make('no_hp')
                            ->numeric()
                            ->required(),
                    ]),
                Repeater::make('socialAkuns')
                    ->label('Akun Sosial')
                    ->relationship()
                    ->schema([
                        Select::make('platform')
                            ->required()
                            ->options([
                                'instagram' => 'Instagram',
                                'tiktok' => 'Tiktok',
                                'facebook' => 'Facebook',
                                'youtube' => 'YouTube',
                            ]),
                        TextInput::make('url')
                            ->label('Link Akun')
                            ->required()
                            ->suffixIcon('heroicon-o-link')
                            ->url(),
                    ]),
                FileUpload::make('path_img')
                    ->label('Foto')
                    ->image()
                    ->directory('influencer_img')
                    ->disk('public'),
                Select::make('kategori')
                    ->required()
                    ->options([
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
                    ]),
            ]);
    }
}
