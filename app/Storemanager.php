<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storemanager extends Model
{
    //
    protected $guarded = [];

    public function manager(){
        return $this->belongsTo(Manager::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
