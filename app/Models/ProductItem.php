<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    protected $table = 'product_items';
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
