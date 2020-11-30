<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $primaryKey = 'product_id';


    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public static function getNewItems()
    {
        return self::select('product_id', 'color_id', 'price')
            ->with('color', function($q){
                $q->select('id', 'name', 'code');
            })
            ->latest()
            ->get();
    }
}
