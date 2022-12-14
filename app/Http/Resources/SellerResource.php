<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return ( [
            "status"=> "success",
            "code"=> 200,
            "message"=>  "Success!",
            'res'=> [
                [   
                    'seller_name'   => $this->name,
                    'seller_img'    => $this->image,
                    'seller_banner' => $this->banner,
                    'prods'         => new ProductCollection($this->products),
                ]
            ]
    ]);
    }
}
