<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'email',
        'department_id',
        'image',
        'is_admin',
        'password',
        'mobile_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin'          => 'boolean',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function results(): HasMany
    {
        return $this->hasMany(Result::class);
    }

   public function trains(): HasMany
{
    return $this->hasMany(Train::class, 'faculty_id', 'id');
}

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }
    
   
  public function teachings(): HasMany
{
    return $this->hasMany(Teaching::class, 'faculty_id', 'id');
}

public function research(): HasMany
{
    return $this->hasMany(Research::class, 'faculty_id', 'id');
}

public function publications(): HasMany
{
    return $this->hasMany(Publication::class, 'faculty_id', 'id');
}

public function awards(): HasMany
{
    return $this->hasMany(Award::class, 'faculty_id', 'id');
}
public function experiences(): HasMany
{
    return $this->hasMany(Experience::class, 'faculty_id', 'id');
}
}