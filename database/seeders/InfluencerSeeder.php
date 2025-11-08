<?php

namespace Database\Seeders;

use App\Models\Influencer;
use App\Models\SocialAkun;
use Illuminate\Database\Seeder;

class InfluencerSeeder extends Seeder
{
    public function run(): void
    {
        $influencers = [
            [
                'nama' => 'Anya Geraldine',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'lifestyle',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/anyageraldine'],
                    ['platform' => 'tiktok', 'url' => 'https://tiktok.com/@anyageraldine'],
                ]
            ],
            [
                'nama' => 'Rachel Vennya',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'lifestyle',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/rachelvennya'],
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@rachelvennya'],
                ]
            ],
            [
                'nama' => 'Awkarin',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '75000+',
                'kategori' => 'fashion',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/awkarin'],
                    ['platform' => 'tiktok', 'url' => 'https://tiktok.com/@awkarin'],
                ]
            ],
            [
                'nama' => 'Tanboy Kun',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'food',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/tanboykun'],
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@tanboykun'],
                ]
            ],
            [
                'nama' => 'Gita Savitri',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '75000+',
                'kategori' => 'education',
                'socials' => [
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@gitasav'],
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/gitasav'],
                ]
            ],
            [
                'nama' => 'Raditya Dika',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'entertainment',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/raditya_dika'],
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@radityadika'],
                ]
            ],
            [
                'nama' => 'Suhay Salim',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '75000+',
                'kategori' => 'beauty',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/suhaysalim'],
                    ['platform' => 'tiktok', 'url' => 'https://tiktok.com/@suhaysalim'],
                ]
            ],
            [
                'nama' => 'Arief Muhammad',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'lifestyle',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/ariefmuhammad'],
                    ['platform' => 'twitter', 'url' => 'https://twitter.com/ariefmuhammad'],
                ]
            ],
            [
                'nama' => 'Tasya Farasya',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'beauty',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/tasyafarasya'],
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@tasyafarasya'],
                ]
            ],
            [
                'nama' => 'Jerome Polin',
                'path_img' => 'influencers_placeholder/influencers_placeholder.jpg',
                'followers' => '100000+',
                'kategori' => 'education',
                'socials' => [
                    ['platform' => 'instagram', 'url' => 'https://instagram.com/jeromepolin'],
                    ['platform' => 'youtube', 'url' => 'https://youtube.com/@jeromepolin'],
                ]
            ],
        ];

        foreach ($influencers as $influencerData) {
            $socials = $influencerData['socials'];
            unset($influencerData['socials']);

            $influencer = Influencer::create($influencerData);

            foreach ($socials as $social) {
                SocialAkun::create([
                    'platform' => $social['platform'],
                    'url' => $social['url'],
                    'influencer_id' => $influencer->id,
                ]);
            }
        }
    }
}
