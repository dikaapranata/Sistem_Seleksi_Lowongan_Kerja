<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplyLoker extends Model
{
    use HasFactory;

    protected $primaryKey = 'idapply';

    protected $guarded = [];

    public function loker(): BelongsTo
    {
        return $this->belongsTo(Loker::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
