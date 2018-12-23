<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Property;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Post::latest()->get();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'property_title' => 'required',
            'property_description' => 'required',
            'property_area' => 'required',
            'property_bedroom' => 'required',
            'property_bathroom' => 'required',
            'property_garage' => 'required',
            'property_address' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'property_year_built' => 'required',
        ]);


        $post = new Post();         

        $post->property_title = $request->property_title;
        $post->property_price = $request->property_price;
        $post->is_approve = $request->is_approve;
        $post->property_year_built = $request->property_year_built;

        if($request->property_publication_status == true){
        $post->property_publication_status = true;

        }else{
        $post->property_publication_status = false;

        }
        $post->user_id = Auth::id();
        $post->property_description = $request->property_description;
        $post->property_area = $request->property_area;
        $post->property_bedroom = $request->property_bedroom;
        $post->property_bathroom = $request->property_bathroom;
        $post->property_garage = $request->property_garage;
        $post->property_address = $request->property_address;
        $post->property_status = $request->property_status;

        if (Auth::user()->role->id == 1) {
            $post->is_approve = true;
        }else{
            $post->is_approve = false;
        }
        

        $post->save();
        Toastr::success('Post successfully inserted.','success');
        return redirect()->route('admin.property.index');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Post::find($id);
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'property_title' => 'required',
            'property_description' => 'required',
            'property_area' => 'required',
            'property_bedroom' => 'required',
            'property_bathroom' => 'required',
            'property_garage' => 'required',
            'property_address' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'property_year_built' => 'required',
        ]);


        $post = Post::find($id);         

        $post->property_title = $request->property_title;
        $post->property_price = $request->property_price;
        $post->is_approve = $request->is_approve;
        $post->property_year_built = $request->property_year_built;

        if($request->property_publication_status == true){
        $post->property_publication_status = true;

        } else {
            $post->property_publication_status = false;
        }

        $post->user_id = Auth::id();
        $post->property_description = $request->property_description;
        $post->property_area = $request->property_area;
        $post->property_bedroom = $request->property_bedroom;
        $post->property_bathroom = $request->property_bathroom;
        $post->property_garage = $request->property_garage;
        $post->property_address = $request->property_address;
        $post->property_status = $request->property_status;

        if (Auth::user()->role->id == 1) {
            $post->is_approve = true;
        }else{
            $post->is_approve = false;
        }
        

        $post->save();
        Toastr::success('Post successfully Updated.','success');
        return redirect()->route('admin.property.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Post::find($id);
        $property->delete();

        Toastr::success('Post Deleted Successfully...', 'success');
        return redirect()->route('admin.property.index');
    }
}
