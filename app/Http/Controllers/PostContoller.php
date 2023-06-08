<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Type\Integer;

class PostContoller extends Controller
{
    public function showcreatepost(){
        $category=Category::all();
        return view('admin.createpost',compact('category'));
    }
    public function createpost(){

        $this->validate(request(),[
            'title'=>'required',
            'cover_photo'=>'required|image',
            'top_heading'=>'required',
            'category_id'=>'required|integer',
            'top_description'=>'required',
            'blog_image_one'=>'required|image',
            'blog_image_two'=>'required|image',
            'last_description'=>'required'
        ],[
            'category_id.integer' => 'Please select a valid category.',
        ]);

        /// image section  start         ///
        $cover_extension=request()->file('cover_photo')->Extension();
        $cover_name='cover'.'_'.uniqid().'_'.time().'_'.$cover_extension;
        request()->file('cover_photo')->move('cover_photo',$cover_name);

        $blog_image_one_extension=request()->file('blog_image_one')->Extension();
        $blog_image_one_name='blog_image_one'.'_'.uniqid().'_'.time().'_'.$blog_image_one_extension;
        request()->file('blog_image_one')->move('blog_image_one',$blog_image_one_name);


        $blog_image_two_extension=request()->file('blog_image_two')->Extension();
        $blog_image_two_name='blog_image_two'.'_'.uniqid().'_'.time().'_'.$blog_image_two_extension;
        request()->file('blog_image_two')->move('blog_image_two',$blog_image_two_name);

        /// image section  end          ///

        Auth::guard('admin')->user()->createpost()->create([
            'title'=>request('title'),
            'category_id'=>request('category_id'),
            // 'category_id'=>$categoryID,
            'cover_photo'=> $cover_name,
            'top_heading'=>request('top_heading'),
            'top_description'=>request('top_description'),
            'blog_image_one'=>$blog_image_one_name,
            'blog_image_two'=> $blog_image_two_name,
            'last_description'=>request('last_description')

        ]);
        return redirect()->back();
    }
    public function allposts(){
        $allpost=Post::all();
        return view('admin.allposts',compact(['allpost']));
    }
    public function showpostViewEdit($id){
        $postViewEdit=Post::find($id);
        $category=Category::all();

        return view('admin.postviewedit',compact(['postViewEdit','category']));
    }
    public function postViewEdit($id){
        $post=Post::find($id);

/// image section start ///
if (request()->hasFile('cover_photo')) {
    $cover_extension = request()->file('cover_photo')->Extension();
    $cover_name = 'cover' . '_' . uniqid() . '_' . time() . '.' . $cover_extension;
    request()->file('cover_photo')->move('cover_photo', $cover_name);
    $destination='cover_photo/'.$post->cover_photo;
    if(File::exists($destination)){
        File::delete($destination);
    }
} else {
    $cover_name = $post->cover_photo;
}

if (request()->hasFile('blog_image_one')) {
    $blog_image_one_extension = request()->file('blog_image_one')->getClientOriginalExtension();
    $blog_image_one_name = 'blog_image_one' . '_' . uniqid() . '_' . time() . '.' . $blog_image_one_extension;
    request()->file('blog_image_one')->move('blog_image_one', $blog_image_one_name);
    $destination_two='blog_image_one/'.$post->blog_image_one;
    if(File::exists($destination_two)){
        File::delete($destination_two);
    }
} else {
    $blog_image_one_name = $post->blog_image_one;
}


if (request()->hasFile('blog_image_two')) {
    $blog_image_two_extension = request()->file('blog_image_two')->getClientOriginalExtension();
    $blog_image_two_name = 'blog_image_two' . '_' . uniqid() . '_' . time() . '.' . $blog_image_two_extension;
    request()->file('blog_image_two')->move('blog_image_two', $blog_image_two_name);
    $destination_three='blog_image_two/'.$post->blog_image_two;
    if(File::exists($destination_three)){
        File::delete($destination_three);
    }
} else {
    $blog_image_two_name = $post->blog_image_two;
}
/// image section end ///

            $post->title = request('title');
            $post->admin_id=Auth::guard('admin')->id();
            $post->category_id = request('category_id');
            $post->cover_photo = $cover_name;
            $post->top_heading = request('top_heading');
            $post->top_description = request('top_description');
            $post->blog_image_one = $blog_image_one_name;
            $post->blog_image_two = $blog_image_two_name;
            $post->last_description = request('last_description');
            $post->save();
        return to_route('allposts');

    }
    public function deletepost($id){
        $delete= Post::find($id)->delete();
        return redirect()->back();
    }
    public function singlepost(){
        return view('singlepost');
    }

}
