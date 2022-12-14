<?php

namespace Database\Factories;
use App\Models\Unit;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variation>
 */
class VariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker   = Faker::create();
        $delivery_charge          =  Arr::random(range(20,50));
        $discount_percentage      =  Arr::random(range(1,10));
        $price                    =  Arr::random(range(100,500));
        $unit_id = Unit::pluck('id')->random();
        return [
            'type'                => fake()->word(),
            'product_id'          => Product::pluck('id')->random(),
            'variant_group_id'    => 161551,
            'price_unit_id'       => $unit_id,
            'stock_unit_id'       => $unit_id,
            'stock_status'        => Arr::random(["Available","Not Available"]),
            'price_quantity'        => Arr::random(range(1,10)),
            'stock_quantity'        => Arr::random(range(10,100)),
            'minimum_order_quantity' => 1,
            'delivery_time'        => now()->format('H:i'),
            'delivery_time_type'   => Arr::random(["12 hrs","24 hrs"]),
            'delivery_charge'      => $delivery_charge,
            'price'                =>  $price,
            'cod_available'        => Arr::random(["Yes","No"]),
            'discount_type'        => Arr::random(["Fixed","Percentange"]),
            'discount_percent'     => $discount_percentage,
            'discount_amount'      => $discount_percentage * $price/100,
            'tax_amount'           => 20
        ];
    }
}
