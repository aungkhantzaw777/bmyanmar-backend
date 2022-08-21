<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWishListRequest;
use App\Http\Requests\UpdateWishListRequest;
use App\Models\WishList;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WishList::latest()->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWishListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWishListRequest $request)
    {
        $wishlist = WishList::create([
            'name' => $request->name,
            'price' => $request->price, 
        ]);
        return $wishlist;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        $id = request()->id;
        $wishlist = WishList::findorfail($id);
        return $wishlist;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishListRequest  $request
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWishListRequest $request, WishList $wishList)
    {
        $id = request()->id;
        $wishlist = WishList::findorfail($id);
        $name = request()->name;
        $price = (int)request()->price;
        $wishlist->update([
            'name' => $name,
            'price' => $price
        ]);
        return $wishlist;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy(WishList $wishList)
    { 
        // $wishList->delete();
        $id = request()->id;
        $wl = WishList::findorfail($id);
        $wl->delete();
        return $wl;
    }
}
