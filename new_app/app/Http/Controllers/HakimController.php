<?php

namespace App\Http\Controllers;

use console;
use App\Models\hakim;
use Illuminate\Http\Request;

class HakimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function first(){
        return view('home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $validatedData = $request->validate
        ([
            'email' => 'required|email|unique:samuel',
            'password' => 'required|min:5',
                    
        ]);
        
        $destinationPath = 'myImages';
        $myimage = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);

        $postData = ['email' => $request->email, 'password' => $request->password, 'image' => $myimage];

        hakim::create($postData);
        return redirect('/home')->with(['message' => 'New member added successfully!', 'status' => 'success']);
     }

    /**
     * Display the specified resource.
     */
    public function show(hakim $hakim)
    {
        //
    }

    public function formPage(){
        return view('form');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hakim $hakim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hakim $hakim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hakim $hakim)
    {
        //
    }
}
