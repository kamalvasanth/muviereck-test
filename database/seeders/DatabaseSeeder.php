<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Variation;
use App\Models\VariationImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Seller::factory()->create();
        Product::factory()->create();
        Variation::factory()->count(3)->create();
        VariationImage::factory()->count(25)->create();
        
    }
}
