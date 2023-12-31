<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loker extends Model
{
    use HasFactory;

    protected $primaryKey = 'idloker';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function apply_loker(): HasMany
    {
        return $this->hasMany(ApplyLoker::class);
    }
}
