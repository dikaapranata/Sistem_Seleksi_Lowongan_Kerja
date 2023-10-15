<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'noktp';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public const KEL_LK = 1;
    public const KEL_PR = 0;

    public const PEND_SMA = 'SMA';
    public const PEND_D1 = 'D1';
    public const PEND_D2 = 'D2';
    public const PEND_D3 = 'D3';
    public const PEND_D4 = 'D4';
    public const PEND_S1 = 'S1';
    public const PEND_S2 = 'S2';
    public const PEND_S3 = 'S3';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function lokers(): HasMany
    {
        return $this->hasMany(Loker::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function apply_lokers(): HasMany
    {
        return $this->hasMany(ApplyLoker::class);
    }

    public function foto(): string
    {
        return Storage::url($this->foto);
    }
}
