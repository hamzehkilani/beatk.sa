<?php
namespace App\Modules\Auction\Models;

use App\Models\User;
use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id','minimum_bid_value','start_date','end_date','end_when_price','status','created_by_id', 'success_user_id'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by_id');
    }

    public function successUser(){
        return $this->belongsTo(User::class,'success_user_id');
    }
    public function scopeWithRelations($query)
    {
        return $query->with(['product','createdBy','successUser']);
    }
}
