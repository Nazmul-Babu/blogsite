<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showcreatecategory(){
        $categories=Category::all();
        return view('admin.createcategory',compact(['categories']));
    }
   public function createcategory(Request $request){

        //    $data=$request->all();
           $this->validate(request(),[
               'category_name'=>'required'
           ]);

           Auth::guard('admin')->user()->createCategory()->create([
               'category_name'=>request('category_name')

           ]);
            return redirect()->back();
            // for ajax
        //    return response()->json(['success'=>true, 'su_msg'=> 'category created  successfully']);

   }
}
