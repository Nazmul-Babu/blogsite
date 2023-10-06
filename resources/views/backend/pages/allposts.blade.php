@extends('backend.includes.backend_layout')
@section('content')
<div class="p-5" id="targetelement">

    <ul>
        @foreach ($allpost as $allposts)

        <li >
            <div class="card"  >
                <div   style="font-size: 30px;color:green">{{$allposts->title}}</div>
                <div style="display: flex" >
                    <div  class="text-right p-2"><button  href=""><a href="{{route('admin.showpostViewEdit',$allposts->id)}}">view/edit</a> </button></div>
                <div  class="text-right p-2"><button  href=""><a href="{{route('admin.deletepost',$allposts->id)}}">Delete</a> </button></div>
                </div>
            </div>
        </li>
        @endforeach

    </ul>
</div>
@endsection
@push('js')

@endpush

