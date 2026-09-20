<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    // "alumni" is already plural, so set the table name explicitly
    protected $table = 'alumni';

    protected $fillable = ['title', 'image', 'description'];

    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image);
    }
}
