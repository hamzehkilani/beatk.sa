<?php

namespace App\Modules\Product\Models;

use App\Models\Image;
use App\Models\User;
use App\Modules\Category\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'video',
        'description',
        'created_by_id',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }


    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function firstImage()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function scopeWithRelations($query)
    {
        return $query->with(['category','createdBy','firstImage']);
    }
}
