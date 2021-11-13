@extends('admin.main')
@section('content')
    <head>
        <script src="/ckeditor/ckeditor.js"></script>
    </head>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Create Product</h3>
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
                                <div class="form-group">
                                    <label for="basicInput">Product name</label>
                                    <input type="text" class="form-control"name="name" id="basicInput" value="{{ $product->name }}" >
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Category</label>
                                    <select name="category_id" class="btn btn-secondary dropdown-toggle me-1"
                                            style="width: 250px; margin-left: 10px;">
                                        @foreach($categories as $cate)
                                            <option value="{{$cate->id}}" {{$product->category_id == $cate->id ? 'selected' : ''}}>
                                                {{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="helpInputTop" value="{{ $product->slug }}" >
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Quantity</label>
                                    <input type="number" class="form-control" min="0" name="quantity" value="{{ $product->quantity }}" >
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Price</label>
                                    <input type="text" class="form-control" name="price" id="helpInputTop" value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Sale Price</label>
                                    <input type="text" class="form-control" name="sale_price" id="helpInputTop" value="{{ $product->sale_price }}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="/upload/products/{{ $product->image }}" height="250px" width="250px" >
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose product image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Product description</label>
                                    <textarea class="form-control"name="description" id="" >{{ $product->name }}</textarea>
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

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        // CKEDITOR.replace( 'description' );
    </script>

@endsection
