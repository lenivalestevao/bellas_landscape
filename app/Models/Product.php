<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $fillable = ['id', 'category_id', 'title', 'slug', 'is_active'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function items(){
        return $this->hasMany(ProductItem::class);
    }
    
    public function getPriceAttribute()
    {
        $items = $this->items;
        if(count($items) <=0)
            return 0.0;
        $items->select(DB::raw('MAX(price)'))->get();
        return $this->items()->first()->price;
    }
}
