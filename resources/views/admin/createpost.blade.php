@extends('admin.adminlayout')
@section('content')
<div class="p-5">
   <h3 class="text-center">Create Post</h3>
   <div class="card ">
    <form action="" class="form-group" enctype="multipart/form-data">
        <div class="card-head p-3">
            <h1 style="color:rgb(38, 0, 255)" class="text-center">1.Title</h1>
            <input type="text" class="form-control" name="title"><br>
            <h1 style="color:teal" class="text-center">2.Cover image</h1>
            <input type="file" name="cover_photo" ><br>
            <h1 style="color:teal" class="text-center">3.Top heading</h1>
            {{-- <input type="text" class="form-control" name="top_heading"> --}}
            <textarea class="form-control" name="top_heading" cols="30" rows="5"></textarea>
        </div>
        <div class="card-body">
            <h1 style="color:teal" class="text-center">4.Top description</h1>
            <textarea class="form-control" name="top_description" cols="30" rows="15"></textarea><br>
            <h1 style="color:teal" class="text-center">5.Blog images</h1>
            <input type="file" name="blog_image_one" ><br><br>
            <input type="file" name="blog_image_two" ><br>
            <h1 style="color:teal" class="text-center">6.last description</h1>
            <textarea class="form-control" name="last_description" cols="30" rows="30"></textarea><br>

        </div>
    </form>
   </div>

</div>
@endsection
