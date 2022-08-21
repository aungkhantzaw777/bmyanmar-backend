<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageIncomeController extends Controller
{
    public function index() 
    {

    }
    public function store(Request $request) 
    {
        $wishlist = $request->wishlist_id;
        $income = $request->income_id;

        
    }
}
