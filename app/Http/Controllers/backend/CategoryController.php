<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showcreatecategory(){
        $data =array();
        $data['active_menu'] = 'category';
        $data['page_title'] = 'Category';
        $categories=Category::all();
        return view('backend.pages.createcategory',compact(['categories','data']));
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
