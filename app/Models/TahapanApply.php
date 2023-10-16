<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TahapanApply extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tahapan(): BelongsTo
    {
        return $this->belongsTo(Tahapan::class);
    }

    public function apply_loker(): BelongsTo
    {
        return $this->belongsTo(ApplyLoker::class);
    }
}
