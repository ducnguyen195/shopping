<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find($id)
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

public function category(): HasMany
{
    return $this->hasMany(Category::class,'id','category_id');
}
}
