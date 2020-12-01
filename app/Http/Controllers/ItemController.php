<?php

namespace App\Http\Controllers;

use App\Http\Requests\Item\IndexRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('items.index');
    }

    public function search(IndexRequest $request)
    {
        $items = Item::newItems();

        // Name filter
        if($request->has('name')){
            $items = $items->where('name', 'like', '%'. $request->input('name') .'%');
        }

        // Price filter
        if($request->input('price_min')){
            $items = $items->where('price', '>=', $request->input('price_min'));
        }
        if($request->input('price_max')){
            $items = $items->where('price', '<=', $request->input('price_max'));
        }

        $items = $items->get();

        return ItemResource::collection($items);
    }
}
