<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static find($id)
 * @method static where(string $string, string $string1, $id)
 */

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description'];
}
