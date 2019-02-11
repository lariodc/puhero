<?php

namespace InterSoluciones\Http\Controllers;

use InterSoluciones\Provider; 
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    
        if($request->hasFile('logo')){
        $file = $request->file('logo');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);
        

    }

        $provider = new Provider();
        $provider->name=$request->input('name');
        $provider->logo = $name;
        $provider->save();
              
        return 'Saved';
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
       return view('providers.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        
        return view('providers.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
       
    //return $provider;
       //return $request;


       $provider->fill($request->except('logo'));
        if($request->hasFile('logo')){
        $file = $request->file('logo');
        $name = time().$file->getClientOriginalName();
        $provider->logo = $name;
        $file->move(public_path().'/images/',$name);
        

    }
      $provider->save();

    return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
