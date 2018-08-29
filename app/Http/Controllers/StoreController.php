<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\User;
use App\Storemanager;
use App\Storeproduct;
use App\Product;
use App\Manager;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stores = Store::all();
        return view('home', [
            'stores' => $stores,
        ]);
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
        $store['name'] = $request->name;
        $store['location'] = $request->location;

        Store::create($store);
        return redirect ('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::all();
        $store = Store::where('id',$id)->first();
        $products = Product::all();
        $managers = Manager::all();
        $storemanagers = Storemanager::where('store_id', $id)->get();
        $storeproducts = Storeproduct::where('store_id', $id)->get();
        return view('stores.show', [
            'store' => $store,
            'users' => $users,
            'products' => $products,
            'managers' => $managers,
            'storemanagers' => $storemanagers,
            'storeproducts' => $storeproducts,
        ]);
    }

}
