@extends('backend.master')

@section('d-title')
Dashboard
@endsection

@section('dashboard-content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Project</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 offset-3">
            <form action="{{ url('project/save') }}" method="POST" enctype="multipart/form-data" class="shadow rounded p-5">
                @csrf
                <div class="from-group mb-3">
                    <label for="project_name">Poject Name</label>
                    <input type="text" name="project_name" id="project_name" class="form-control" placeholder="Enter Project Name">
                </div>
                <div class="from-group mb-3">
                    <label for="project">Poject</label>
                    <input type="text" name="project" id="project" class="form-control" placeholder="Enter Project">
                </div>
                <div class="from-group mb-3">
                    <label for="languages">Languages</label>
                    <input type="text" name="languages" id="languages" class="form-control" placeholder="Enter languages">
                </div>
                <div class="from-group mb-3">
                    <label for="project_image" class="form-label">Image</label>
                    <input type="file" name="project_image" id="project_image" class="form-control">
                </div>
                <div class="from-group mb-3 flex">
                    <label for="description">Category Description</label>
                    <textarea name="description" id="description" cols="50" rows="5"></textarea>
                </div>
                <div class="from-group mb-3">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
