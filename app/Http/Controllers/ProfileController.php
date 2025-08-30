<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::get();
        return view('Website.HomePage',compact('profiles'));
    }

     public function about()
    {
        return view('Website.About');
    }

     public function project()
    {
        return view('Website.Project');
    }

      public function resume()
    {
        return view('Website.Resume');
    }

      public function memory()
    {
        return view('Website.Memory');
    }

    
      public function achievement()
    {
        return view('Website.Achievement');
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
           $request->validate([
         "name" => "required",
         "email" => "required",
         "message" => "required",
         
         

        ]);

        Profile::create([
         "name" =>$request->name,
         "email" =>$request->email,
         "message" =>$request->message,
      

        ]);

          return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
