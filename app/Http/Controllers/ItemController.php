<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items['new'] = Item::getNewItems();

        //Make it ready to be a VueJs prop
        $items = json_encode($items);

        return view('items.index', compact('items'));
    }
}
