<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['weight', 'image', 'title', 'slogan'];

    // $banner->image_url
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image);
    }
}
