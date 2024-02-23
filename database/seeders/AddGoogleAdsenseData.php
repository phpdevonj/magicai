<?php

namespace Database\Seeders;

use App\Models\GoogleAdsense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddGoogleAdsenseData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $googleAdsense = [
            [
                'type' => 'landing-header-section',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-features-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-templates-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-tools-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-how-it-works-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-testimonials-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
            [
                'type' => 'landing-pricing-section-728x90',
                'status' => false,
                'code' => 'ssd'
            ],
        ];

        GoogleAdsense::insert($googleAdsense);
    }
}
