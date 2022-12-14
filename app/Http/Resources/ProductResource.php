<?php

namespace App\Http\Resources;

use App\Models\Product;
use App\Http\Resources\VariationCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            "product_id"=>$this->id,
            "type" =>  $this->type,
            "name" =>  $this->name,
            "seller_name" =>$this->seller->name,
            "status" => $this->status,
            "img"=> $this->image,
            "description"=> $this->description,
            "brand" => $this->brand,
            "category" => $this->category,
            "tax_id" => $this->tax->id,
            "tax_name" => $this->tax->name,
            "tax_percent" => $this->tax->percent,
            "seller_id" => $this->seller->id,
            "live_img"=> [$this->live_image],
            "attributes"=> [Product::$ATTRIBUTES],
            'vars' => new VariationCollection($this->variations),

            ];
    }
}
