<?php

namespace App\Http\Resources;

use App\Http\Resources\VariationImageResource;
use App\Http\Resources\VariationImageCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class VariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

                    "product_variant_id" => $this->id,
                    "type" => $this->type,
                    "product_variant_group_id" => $this->variant_group_id,
                    "price_qty" => $this->price_quantity,
                    "price" => $this->price,
                    "price_unit_id" => $this->price_unit->id,
                    "price_unit_name" => $this->price_unit->name,
                    "disc_type" => $this->discount_type,
                    "disc_amt" => $this->discount_amount,
                    "discounted_price" => $this->discount_amount,
                    "stock_qty" => $this->stock_quantity,
                    "stock_unit_id" => $this->stock_unit->name,
                    "stock_unit_name" => $this->stock_unit->name,
                    "stock_status" => $this->stock_status,
                    "min_order_qty" => $this->minimum_order_quantity,
                    "deliv_time" => $this->delivery_time,
                    "deliv_time_type" => $this->delivery_time_type,
                    "deliv_charge" => $this->delivery_charge,
                    "cod_available" => $this->cod_available,
                    "seller_name" => $this->product->seller->name,
                    "seller_id" => $this->product->seller->id,
                    "tax_amt"=> $this->tax_amount,
                    "img"=> new VariationImageCollection($this->images)
        ];
    }
}
