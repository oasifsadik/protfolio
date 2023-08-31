@extends('backend.master')

@section('d-title')
Dashboard
@endsection

@section('dashboard-content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> All Category</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($category as $item)
                           <tr>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->category_description }}</td>
                            <td>
                                <a href="{{ url('admin/category/edit/'.$item->id) }}" class="btn btn-success btn-sm">edit</a>
                                <a href="{{ url('admin/delete/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
