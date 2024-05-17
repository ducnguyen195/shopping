<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static where(string $string, string $string1, string $string2)
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
    public function parentCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class,'parent_id','id');
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
