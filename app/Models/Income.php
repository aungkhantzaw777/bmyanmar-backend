<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{

    use HasFactory;
    
    protected $guarded = [];

    public function wishlists() {
        return $this->belongsToMany(WishList::class, 'manage_income', 'income_id', 'wishlist_id');
    }
}
