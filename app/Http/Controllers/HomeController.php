<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showhome(){
        $post=Post::with('adminforpost')->latest()->take(4)->get();
        $allpost=Post::with('adminforpost')->paginate('3');
        $popular_post=Post::with('adminforpost')->take(3)->get();
        $recent_post=Post::with('adminforpost')->latest()->take(4)->get();
        $category=Category::all();
        // $photos=photo::with('user')->where('status','pending')->latest()->paginate(2);

        return view('home',compact(['post','popular_post','recent_post','category','allpost']));
    }
}
