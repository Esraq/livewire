<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = ['image', 'title', 'file_name', 'date'];

    protected $casts = [
        'date' => 'date',
    ];

    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image);
    }

    public function getFileUrlAttribute(): string
    {
        return asset('storage/' . $this->file_name);
    }
}
