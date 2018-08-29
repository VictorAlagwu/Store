<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storeproduct extends Model
{
    //
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
