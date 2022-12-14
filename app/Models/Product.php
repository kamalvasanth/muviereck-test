<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    static $ATTRIBUTES = [
            "name"=> "Country of Origin",
            "value"=> [
                "india"
            ]
        ];
    public function variations()
    {
        return $this->hasMany(Variation::class,'product_id');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class, 'tax_id');
    }
}
