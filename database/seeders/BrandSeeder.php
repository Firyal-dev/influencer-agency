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
                'deskripsi_brand' => 'Brand kopi legendaris Indonesia yang telah dipercaya sejak 1927. Menyediakan berbagai varian kopi bubuk premium dengan cita rasa khas Nusantara.',
                'industri' => 'Food & Beverage',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Wardah',
                'deskripsi_brand' => 'Brand kosmetik dan skincare halal terkemuka di Indonesia. Menghadirkan produk kecantikan berkualitas tinggi dengan harga terjangkau untuk wanita Indonesia.',
                'industri' => 'Beauty & Personal Care',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Tokopedia',
                'deskripsi_brand' => 'Platform e-commerce terbesar di Indonesia yang menghubungkan jutaan penjual dan pembeli. Menyediakan berbagai produk mulai dari fashion, elektronik, hingga kebutuhan sehari-hari.',
                'industri' => 'Technology',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Indomie',
                'deskripsi_brand' => 'Brand mie instan nomor 1 di Indonesia yang telah mendunia. Dikenal dengan berbagai varian rasa yang ikonik dan menjadi comfort food jutaan orang.',
                'industri' => 'Food & Beverage',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Shopee',
                'deskripsi_brand' => 'Platform belanja online yang menawarkan pengalaman berbelanja mudah, aman, dan menyenangkan. Dilengkapi dengan berbagai promo menarik dan gratis ongkir.',
                'industri' => 'E-commerce',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Erigo',
                'deskripsi_brand' => 'Brand fashion lokal yang menghadirkan streetwear berkualitas premium dengan desain modern dan trendy. Populer di kalangan anak muda Indonesia.',
                'industri' => 'Fashion',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Traveloka',
                'deskripsi_brand' => 'Platform super app untuk kebutuhan perjalanan, mulai dari booking tiket pesawat, hotel, hingga aktivitas wisata. Memudahkan perencanaan liburan Anda.',
                'industri' => 'Travel & Tourism',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
            [
                'nama_brand' => 'Gojek',
                'deskripsi_brand' => 'Super app yang menyediakan berbagai layanan mulai dari transportasi, pesan antar makanan, pembayaran digital, hingga belanja online dalam satu aplikasi.',
                'industri' => 'Technology',
                'path_img' => 'brands_placeholder/brands_placeholder.jpg',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
