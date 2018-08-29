<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;

class ManagerController extends Controller
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
        $managers = Manager::all();
        return view('managers.index', [
            'managers' => $managers,
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
        $manager['name'] = $request->name;
        $manager['email'] = $request->email;

        Manager::create($manager);
        return redirect ('managers');
    }

    
}
