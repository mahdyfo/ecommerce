<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    public $primaryKey = 'product_id';


    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
