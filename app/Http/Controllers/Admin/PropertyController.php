<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Property;
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
        $properties = Property::latest()->get();
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
        return $request;
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
        $post->property_publication_status = $request->property_publication_status;
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
        return redirect()->back();

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
        //
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
        //
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
