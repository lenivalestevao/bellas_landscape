<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function service(){
        return $this->belongsTo(Service::class);
    }
    
}
