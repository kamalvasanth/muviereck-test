<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function images()
    {
        return $this->hasMany(VariationImage::class, 'Variation_id');
    }

    public function price_unit()
    {
        return $this->belongsTo(Unit::class, 'price_unit_id');
    }

    public function stock_unit()
    {
        return $this->belongsTo(Unit::class, 'stock_unit_id');
    }
}
