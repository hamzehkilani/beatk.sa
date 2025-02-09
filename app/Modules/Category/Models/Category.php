<?php
namespace App\Modules\Category\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'image', 'sort'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
