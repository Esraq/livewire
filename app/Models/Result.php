<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['degree_name', 'institution', 'board', 'year'];


  public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
}


 