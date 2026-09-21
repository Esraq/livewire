<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicCouncil extends Model
{
    protected $fillable = ['weight', 'name', 'image', 'position'];

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }
}
