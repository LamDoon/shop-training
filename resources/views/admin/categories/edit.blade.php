@extends('admin.main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Category {{ $category->id }}</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @include('admin.alert')
        <form method="post" enctype="multipart/form-data">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <td><img src="/upload/categories/{{ $category->banner }}" height="200px" width="350px"></td>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose banner image</label>
                                    <input class="form-control" type="file" id="formFile" name="banner">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Category name</label>
                                    <input type="text" class="form-control"name="name" id="basicInput" value="{{$category->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="helpInputTop" value="{{$category->slug}}">
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @csrf
        </form>
    </div>
@endsection
