<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        "province_id",
        "name",
        "description",
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, "province_id");
    }
}
