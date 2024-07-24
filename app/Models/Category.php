<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
 * @method static where(string $string, string $string1, string $string2)
 * @method static select(string $string)
 * @method static distinct()
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'slug',
        'icon_path',
        'model_type',
    ];

    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }

    public function getChildren(): Collection
    {
        return $this->children()->get();
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    public function post (): HasMany
    {
        return $this->hasMany(Post::class,'category_id','id');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
    public static function boot():void
    {
       parent::boot();
       static::deleting(function ($category){
           foreach ($category->children as $child) {
               $child->delete();
           }
       });
    }
}
