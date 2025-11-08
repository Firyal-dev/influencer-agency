<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    public function run(): void
    {
        $campaigns = [
            [
                'judul' => 'Kopi Kapal Api - New Flavor Launch',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Kampanye peluncuran varian rasa baru Kopi Kapal Api dengan target millennial dan gen Z',
                'budget' => 50000000,
                'status' => 'aktif',
                'brand_id' => 1, // Kopi Kapal Api
            ],
            [
                'judul' => 'Wardah Perfect Bright Series',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Promosi rangkaian produk skincare terbaru dari Wardah untuk kulit cerah dan glowing',
                'budget' => 75000000,
                'status' => 'aktif',
                'brand_id' => 2, // Wardah
            ],
            [
                'judul' => 'Tokopedia 12.12 Sale',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Campaign mega sale akhir tahun dengan berbagai promo menarik',
                'budget' => 100000000,
                'status' => 'draft',
                'brand_id' => 3, // Tokopedia
            ],
            [
                'judul' => 'Indomie Recipe Challenge',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Kompetisi kreasi resep unik menggunakan Indomie',
                'budget' => 35000000,
                'status' => 'aktif',
                'brand_id' => 4, // Indomie
            ],
            [
                'judul' => 'Shopee Blackpink Collaboration',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Kolaborasi spesial dengan brand ambassador Blackpink',
                'budget' => 150000000,
                'status' => 'selesai',
                'brand_id' => 5, // Shopee
            ],
            [
                'judul' => 'Erigo Summer Collection 2024',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Peluncuran koleksi fashion musim panas dengan tema beach vibes',
                'budget' => 45000000,
                'status' => 'aktif',
                'brand_id' => 6, // Erigo
            ],
            [
                'judul' => 'Traveloka Liburan Hemat',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Promo spesial paket liburan domestik dengan harga terjangkau',
                'budget' => 80000000,
                'status' => 'draft',
                'brand_id' => 7, // Traveloka
            ],
            [
                'judul' => 'Gojek Driver Appreciation',
                'path_img' => 'campaigns_placeholder/campaigns_placeholder.jpg',
                'deskripsi' => 'Campaign apresiasi untuk mitra driver Gojek seluruh Indonesia',
                'budget' => 60000000,
                'status' => 'aktif',
                'brand_id' => 8, // Gojek
            ],
        ];

        foreach ($campaigns as $campaign) {
            Campaign::create($campaign);
        }
    }
}
