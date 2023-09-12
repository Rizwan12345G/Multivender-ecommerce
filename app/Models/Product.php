<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];
    // public function images()
    // {
    //     return $this->hasMany(ProductImage::class);
    // }

    // public function videos()
    // {
    //     return $this->hasMany(ProductVideo::class);
    // }

    // public function gallery()
    // {
    //     return $this->hasMany(ProductGallery::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
