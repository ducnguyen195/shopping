<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static find($id)
 * @method static where(string $string, string $string1, int $int)
 * @method static whereHas(string $string, \Closure $param)
 */
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'slug',
        'description',
        'content',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function getPostCategory(): Collection
    {
        return $this->category()->get();
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'post_id','id');
    }
}
