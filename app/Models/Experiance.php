<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_no',
        'institution_name',
        'position',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'serial_no'  => 'integer',
        'faculty_id'=>'integer',
        'start_date' => 'date',
        'end_date'   => 'date',
    ];
}
