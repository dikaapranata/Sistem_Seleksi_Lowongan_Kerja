<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tahapan extends Model
{
    use HasFactory;

    protected $primaryKey = 'idtahapan';

    protected $guarded = [];

    public function tahapan_apply(): BelongsTo
    {
        return $this->belongsTo(TahapanApply::class);
    }
}
