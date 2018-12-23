<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('welcome',compact('properties'));
    }


    public function showPropertyDetails($id){
        return $id;
        // $property = Property::find($id);
        // $agent = Property::find($id)->agent;
        // return view('single-property',compact('property','agent'));
    }

    // public function showUserLogin(){
    //     return view('userLogin');
    // }
}
