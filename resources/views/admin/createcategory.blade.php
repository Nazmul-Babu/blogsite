@extends('admin.adminlayout')
@section('content')
<div class="p-5" id="targetelement">
    <h2 style="color:green">creta a category</h2>
      {{-- @include('errors') --}}
    <form action="{{route('createcategory')}}" method="POST" id="category_form" >
        @csrf
        <input class="form-control" type="text" name="category_name" id="" placeholder="write category name"><br>
        <input class="form-control btn-block btn-success" type="submit" name="" id="" value="create">


    </form>
    <div class="pt-5">
        <h1 style="color:rgb(224, 75, 6)">All Category</h1>
        <ul>

            @if ($categories->isEmpty())
            <li style="color:red">no categories to show create first</li>

            @else
            @foreach ($categories as $category)

            <li style="color:green">{{$category->category_name}}</li>
            @endforeach
            @endif



        </ul>
    </div>

</div>
@endsection


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
//   $(document).ready(function(){
//   $('#category_form').submit(function(event){
//     event.preventDefault();
//     var form=$(this);
//     var url=form.attr('action')
//     var formData=form.serialize();
//     $.ajax({
//                     type: 'POST',
//                     url: url,
//                     data: formData,
//                     dataType: 'json',
//                     success: function (response) {
//                         // Handle the success response
//                         console.log(response);
//                         alert(response.su_msg);
//                     },
//                     error: function (xhr, status, error) {
//                         // Handle the error response
//                         console.log(xhr.responseText);
//                         alert('An error occurred while submitting the form.');
//                     }
//                 });

//   })
//   })


</script>
