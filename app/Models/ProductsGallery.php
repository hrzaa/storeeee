<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductsGallery extends Model
{
    
    protected $fillable = [
        'photos', 'products_id'
    ];

    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
