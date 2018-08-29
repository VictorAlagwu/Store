<?php

namespace App\Http\Controllers;
use App\Storemanager;

use Illuminate\Http\Request;

class StoreManagerController extends Controller
{
    public function __construct(){
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
            'manager_id' => 'required',
            'store_id' => 'required'
        ]);
        $storemanager['manager_id'] = $request->manager_id;
        $storemanager['store_id'] = $request->store_id;
        
        $manager = Storemanager::where('manager_id', $storemanager['manager_id'])
                    ->where('store_id', $storemanager['store_id'])
                    ->first();
        if($manager){
            return redirect('stores')->with('error','This user is already an existing manager of this store');
        }else{
            Storemanager::create($storemanager);
            return back();
        }
    }

  
}
