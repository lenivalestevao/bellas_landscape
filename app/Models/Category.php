<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';
    protected $fillable = ['title', 'slug', 'active'];
    
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
