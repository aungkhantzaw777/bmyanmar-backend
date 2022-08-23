<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{WishList, Income};
use Carbon\Carbon;

class ManageIncomeController extends Controller
{
    public function index() 
    {
        $wishlists = wishlist::all();
        $results = [];


        foreach ($wishlists as $key => $value) {
            if(sizeof($value->incomes) > 0) {
                $new = [
                    'wishlistId' => $value->id,
                    'name' => $value->name,
                    'price' => $value->price,
                    'incomes' => $value->incomes
                ];
                array_push($results, $new);
            }
            
        }
        return $results;
    }
    public function store(Request $request) 
    {
        $wishlist = WishList::findorfail($request->wishlist_id);
        $income = Income::first();

        $wishlist->incomes()->attach($income->id, [
            'date' => Carbon::parse($request->date)->format('Y-m-d')
        ]);
        return $wishlist;
    }
}
