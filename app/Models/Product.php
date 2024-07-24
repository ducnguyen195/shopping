<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @method static where(string $string, string $string1, string $string2)
 * @method static find($id)
 * @method static whereBetween(string $string, int[] $array)
 */
class Product extends Model
{
    use HasFactory;
    protected  $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'barcode',
        'quantity',
        'price',
        'discount_persent',
        'brand_id',
        'post_id',
        'viewer',
        'rating_number',
        'rating_value',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'model_id','id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function  post(): HasMany
    {
        return $this->hasMany(Post::class,'id','post_id');
    }

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }

    public static function boot (): void
    {
        parent::boot();
        static::deleting(function ($product){
            foreach ($product->images as $image){
                $image->delete();
            };
            foreach ($product->post as $post){
                $post->delete();
            }
        });
    }
}
