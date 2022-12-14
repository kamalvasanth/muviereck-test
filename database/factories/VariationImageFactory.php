<?php

namespace Database\Factories;

use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VariationImage>
 */
class VariationImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'variation_id' =>Variation::pluck('id')->random(),
            'url' => fake()->imageUrl(640, 480, 'variation_image', true),
        ];
    }
}
