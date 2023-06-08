@extends('admin.adminlayout')
@section('content')
<div class="p-5">
   <h3 class="text-center">Create Post</h3>
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
    <form action="{{route('createpost')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="card-head p-3">
            <select name="category_id" class="form-control" id="">
                <option >select category</option>
                @foreach ($category as $categories )
                <option value="{{$categories->id}}">{{$categories->category_name}}</option>

                @endforeach
            </select>
            <h1 style="color:rgb(38, 0, 255)" class="text-center">1.Title</h1>
            <input type="text" class="form-control" name="title" placeholder="write here"><br><br><br>

            <h1 style="color:teal" class="text-center">2.Cover image</h1>
            <input type="file" name="cover_photo" ><br><br><br>


            <h1 style="color:teal" class="text-center">3.Top heading</h1>
            {{-- <input type="text" class="form-control" name="top_heading"> --}}
            <textarea class="form-control" name="top_heading" id="" cols="30" rows="5"></textarea><br><br><br>
        </div>
        <div class="card-body">
            <h1 style="color:teal" class="text-center">4.Top description</h1>
            <textarea class="form-control" id="" name="top_description" cols="30" rows="15"></textarea><br><br><br>
            <h1 style="color:teal" class="text-center">5.Blog images</h1>
            <input type="file" name="blog_image_one" ><br><br>
            <input type="file" name="blog_image_two" ><br><br><br>
            <h1 style="color:teal" class="text-center">6.last description</h1>
            <textarea id="" class="form-control"  name="last_description" cols="30" rows="30"></textarea><br><br>



            <input type="submit" value="create">

        </div>
    </form>
   </div>

</div>
@endsection



{{-- tiny mce  --}}

