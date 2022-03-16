<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    
    protected $table = 'sizes';
    protected $fillable = ['name', 'slug', 'is_active'];
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
