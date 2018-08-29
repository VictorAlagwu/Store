<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storeproduct;
class StoreProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'product_id' => 'required',
            'store_id' => 'required'
        ]);
        $storeproduct['product_id'] = $request->product_id;
        $storeproduct['store_id'] = $request->store_id;
        
        $product = Storeproduct::where('product_id', $storeproduct['product_id'])
                    ->where('store_id', $storeproduct['store_id'])
                    ->first();
        if($product){
            return redirect('stores')->with('error','This product is already existing in this store');
        }else{
            Storeproduct::create($storeproduct);
            return back();
        }
    }

}
