<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Subscriver;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	$users = User::all();
        $subscribers  = Subscriver::all();
    	return view('admin.dashboard',compact('posts','users', 'subscribers'));
    }

    public function profile(){
    	return view('admin.profile');
    }

    public function allsubscriber(){
        $sub = Subscriver::all();
        return view('admin.property.subscriber', compact('sub'));
    }

    public function deletesubscriber($id){
        $subscriber = Subscriver::find($id);
        $subscriber->delete();

        Toastr::success('Subscriber Deleted Successfully...', 'success');
        return redirect()->route('admin.property.subscriber');
    }    

    // public function deleteuser($id){
    //     $user = User::find($id);
    //     $user->delete();

    //     Toastr::success('User Deleted Successfully...', 'success');
    //     return redirect()->route('admin.property.subscriber');
    // }

    public function alluserMethod(){
        $users = User::where('role_id',2)->get();
        return view('admin.alluser', compact('users'));
    }
}
