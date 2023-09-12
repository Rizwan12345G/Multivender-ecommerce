<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
    ];

    /**
     * Get all of the comments for the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function service(): HasMany
    // {
    //     return $this->hasMany(service::class);
    // }
}
