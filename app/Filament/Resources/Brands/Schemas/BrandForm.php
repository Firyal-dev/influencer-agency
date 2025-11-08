<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_brand')
                    ->required(),
                FileUpload::make('path_img')
                    ->label('Foto')
                    ->image()
                    ->directory('brand_img'),
                TextInput::make('produk_brand')
                    ->required()
                    ->label('Produk'),
                Select::make('industri')
                    ->label('Industri')
                    ->required()
                    ->options([
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
                    ])
            ]);
    }
}
