<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $table = 'services';
    protected $fillable = ['name', 'slug', 'active'];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
