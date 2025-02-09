<?php
namespace App\Modules\Auction\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['auction_id','user_id','value'];
}
