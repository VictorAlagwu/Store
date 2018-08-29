<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $fillable = [
        'name', 'location',
    ];

    public function storemanagers(){
        return $this->hasMany(Storemanager::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function storeproducts(){
        return $this->hasMany(Storeproduct::class);
    }

}
