<?php

namespace Database\Factories;
use App\Models\Tax;

use App\Models\Seller;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'name'           => fake()->word(),
            'category'       => fake()->word(),
            'brand'          => fake()->word(),
            'seller_id'      => Seller::pluck('id')->random(),
            'tax_id'         => Tax::pluck('id')->random(),
            'type'           => fake()->word(),
            'status'         => Arr::random(['Active','Inactive']),
            'image'          => fake()->imageUrl(640, 480, 'image', true),
            'live_image'     => fake()->imageUrl(640, 480, 'banner', true),
            'description'    => $faker->paragraph(4),
        ];
    }
}
