<?php

namespace App\Http\Controllers\dev;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Version;
use App\Http\Controllers\Controller;


class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules= Module::All();
        $versions= Version::All();
        return view('dev.requete.create',[
            'modules'=>$modules,
            'versions'=>$versions
        ]);
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $requetes= Requete::where($id,'idUser');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}