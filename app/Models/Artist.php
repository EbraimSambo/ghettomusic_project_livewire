<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artist extends Model
{
    use HasFactory;

    protected $fillable =['artist'];

    public function music(): BelongsTo
    {
        return $this->belongsTo(Music::class);
    }
}
