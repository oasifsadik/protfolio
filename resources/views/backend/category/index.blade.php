@extends('backend.master')

@section('d-title')
Dashboard
@endsection

@section('dashboard-content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 offset-3">
            <form action="{{ url('admin/category/store') }}" method="POST" class="shadow rounded p-5">
                @csrf
                <div class="from-group mb-3">
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Enter Category Name">
                </div>
                <div class="from-group mb-3">
                    <label for="cat_descrip">Category Description</label>
                    <input type="text" name="cat_descrip" id="cat_descrip" class="form-control" placeholder="Enter Category Description">
                </div>
                <div class="from-group mb-3">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
