<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_no',
        'subject_name',
    ];

      public function faculty(): BelongsTo
    {
        return $this->belongsTo(User::class, 'faculty_id', 'id');
    }
}
