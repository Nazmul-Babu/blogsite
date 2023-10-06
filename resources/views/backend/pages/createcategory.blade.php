@extends('backend.includes.backend_layout')
@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h6 class="card-title ">Create Category</h6>

                        <form action="{{ route('admin.createcategory') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" type="text" name="category_name" id=""
                                placeholder="write category name">
                            </div>
                            <div class="text-center">
                                <input class="btn btn-xs btn-primary" type="submit" name="" id=""
                                value="create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                    <h6 class="card-title "> Category List</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th style="width:20%">SL</th>
                                        <th style="40%"> Title</th>
                                        <th style="20%">Edit</th>
                                        <th style="20%">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                        @if ($categories->isEmpty())
                                            <td style="color:red">no categories to show create first</td>
                                        @else
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $category->category_name }}</td>


                                                <td>
                                                    <a class="btn btn-success btn-icon" href=""><i
                                                            class="fa-solid fa-edit"></i></a>

                                                </td>
                                                <td>

                                                    <a class="btn btn-danger btn-icon" data-delete=""
                                                        id="delete"><i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->

    <!-- row -->
@endsection

@push('js')
@endpush
