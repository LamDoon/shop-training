@extends('admin.main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail Product</h3>
                </div>

                <div class="col-12 col-md-6 order-md-2 order-first">

                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                                <img src="/upload/products/{{ $product->image }}" height="250px" width="250px" style="border-radius: 50%;">
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-left: -50px;">
                                <div class="form-group">
                                    <label for="basicInput">Name:</label>
                                    <label for="basicInput">{{$product->name}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Slug:</label>
                                    <label for="basicInput">{{$product->slug}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Category:</label>
                                    <label for="basicInput">{{$product->category_id}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Price:</label>
                                    <label for="basicInput">{{$product->price}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Sale price:</label>
                                    <label for="basicInput">{{$product->sale_price}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Quantity:</label>
                                    <label for="basicInput">{{$product->quantity}}</label>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Description:</label>
                                    <label for="basicInput">{{$product->description}}</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @csrf
        </form>

    </div>


@endsection
