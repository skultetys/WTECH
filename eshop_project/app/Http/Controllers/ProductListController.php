<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function show()
    {
        return view('contents.list');
    }
}
