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

    public function propertyBySearch(Request $request){
        $this->validate($request, [
            'key' => 'required',
            'status' => 'required',
            'location' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'sqf' => 'required',
        ]); 

        $key = $request->key;
        $type = $request->status;
        $location = $request->location;
        $bedroom = $request->bedroom;
        $bathroom = $request->bathroom;
        $sqf = $request->sqf;
        // return $type;
        // exit();
        $property = Post::where('property_status', 'LIKE', "%$type%")
                        ->orWhere('property_title', 'like', '%' . $key . '%')
                        ->orWhere('property_bedroom', 'like', '%' . $bedroom . '%')
                        ->orWhere('property_bathroom', 'like', '%' . $bathroom . '%')
                        ->orWhere('property_address', 'like', '%' . $location . '%')
                        ->orWhere('property_area', 'like', '%' . $sqf . '%')
                        ->orderBy('id')->paginate(6);
        return view('propertybysearch', compact('property'));
    }
}
