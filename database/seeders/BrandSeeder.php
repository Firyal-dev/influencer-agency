<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'nama_brand' => 'Kopi Kapal Api',
                'produk_brand' => 'Kopi Bubuk Premium',
                'industri' => 'Food & Beverage',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Wardah',
                'produk_brand' => 'Kosmetik & Skincare',
                'industri' => 'Beauty & Personal Care',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Tokopedia',
                'produk_brand' => 'E-commerce Platform',
                'industri' => 'Technology',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Indomie',
                'produk_brand' => 'Mie Instan',
                'industri' => 'Food & Beverage',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Shopee',
                'produk_brand' => 'Online Shopping',
                'industri' => 'E-commerce',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Erigo',
                'produk_brand' => 'Fashion & Apparel',
                'industri' => 'Fashion',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Traveloka',
                'produk_brand' => 'Travel Booking',
                'industri' => 'Travel & Tourism',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Gojek',
                'produk_brand' => 'Multi-service Platform',
                'industri' => 'Technology',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
