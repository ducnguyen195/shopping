<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @method static where(string $string, string $string1, $type)
 * @method static find($id)
 */
class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'model_type',
        'model_id',
        'path',
        'alt',
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class,'model_id','id');
    }

}
