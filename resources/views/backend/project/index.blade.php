@extends('backend.master')

@section('d-title')
Dashboard
@endsection

@section('dashboard-content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> All Project</h1>
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
                            <th>project Name</th>
                            <th>Project Category</th>
                            <th>Project Languages</th>
                            <th>Project Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($projects as $item)
                           <tr>
                            <td>{{ $item->project_name }}</td>
                            <td>{{ $item->Category->category_name }}</td>
                            <td>{{ $item->languages }}</td>
                            <td>
                                <img src="{{ asset('product/'.$item->project_image) }}" height="80px" width="70px" alt="">
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="">edit</a>
                                <a href="">delete</a>
                            </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
