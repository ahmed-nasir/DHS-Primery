<?php

namespace App\Http\Controllers;

use App\Post;
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
        $properties = Post::latest()->paginate(6);
        return view('welcome',compact('properties'));
    }


    public function showPropertyDetails($id){
       
        $property = Post::find($id);
        
        return view('single-property',compact('property'));
    }

    // public function showUserLogin(){
    //     return view('userLogin');
    // }
    public function contactus(){
        return view('contact_us');
    }

    public function aboutus(){
        return view('aboutus');
    }
}
