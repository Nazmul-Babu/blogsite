@extends('admin.adminlayout')
@section('content')
<div class="p-5">
    <h3 class="text-center">Update Post</h3>
    <div class="card ">
     {{-- tiny mce start  --}}
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

 <script type="text/javascript">

 tinymce.init({

   selector: '#top_description'
 });
 tinymce.init({

   selector: '#top_heading'
 });
 tinymce.init({

   selector: '#last_description'
 });
 </script>
     {{-- tiny mce end  --}}
 @include('errors')
     <form action="" method="POST" class="form-group" enctype="multipart/form-data">
         @csrf
         <div class="card-head p-3">
            <select name="category_id" class="form-control" id="">
                <option value=""> select</option>
                {{-- <option  value="{{$postViewEdit->category->id}}">{{$postViewEdit->category->category_name}}</option> --}}
                @foreach ($category as $categories )
                <option @if ($postViewEdit->category->id==$categories->id) selected @endif value="{{$categories->id}}">{{$categories->category_name}}</option>

                @endforeach
            </select>
             <h1 style="color:rgb(38, 0, 255)" class="text-center">1.Title</h1>
             <input type="text" class="form-control" value="{{$postViewEdit->title}}" name="title" placeholder="write here"><br><br><br>

             <h1 style="color:teal"  class="text-center">2.Cover image</h1>
             {{-- <img src="{{asset('cover_photo/'.$postViewEdit->cover_photo)}}" style="height: 100px;width:100px" alt=""> --}}
             {{-- <input type="hidden" name="pre_cover_photo" value="{{asset('cover_photo/'.$postViewEdit->cover_photo)}}"> --}}
             <input type="file"  name="cover_photo"  ><br><br><br>



             <h1 style="color:teal" class="text-center">3.Top heading</h1>
             {{-- <input type="text" class="form-control" name="top_heading"> --}}
             <textarea class="form-control" name="top_heading" id="top_heading"   cols="30" rows="5">{{$postViewEdit->top_heading}}</textarea><br><br><br>
         </div>
         <div class="card-body">
             <h1 style="color:teal" class="text-center">4.Top description</h1>
             <textarea class="form-control" id="top_description" name="top_description" cols="30" rows="15">{{$postViewEdit->top_description}}</textarea><br><br><br>
             <h1 style="color:teal" class="text-center">5.Blog images</h1>
             <input type="file" name="blog_image_one" ><br><br>
             <input type="file" name="blog_image_two"><br><br><br>
             <h1 style="color:teal" class="text-center">6.last description</h1>
             <textarea id="last_description" class="form-control"  name="last_description" cols="30" rows="30">{{$postViewEdit->last_description}}</textarea><br><br>



             <input type="submit" value="update">

         </div>
     </form>
    </div>

 </div>
@endsection





