<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function incomes() {
        return $this->belongsToMany(Income::class, 'manage_income', 'wishlist_id', 'income_id' );
    }
}
