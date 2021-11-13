@extends('admin.main')
@section('content')
    <?php $i=0; ?>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Products</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    @include('admin.alert')

    <!-- Striped rows start -->
{{--        <a class="btn btn-primary" style="float: right; " href="{{url('admin/categories/create')}}">Create new</a>--}}
        <section class="section">
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <!-- table striped -->
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>IMAGE</th>
                                        <th>NAME</th>
                                        <th>QUANTITY</th>
                                        <th>PRICE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="text-bold-500">{{++$i}}</td>
                                            <td><img src="/upload/products/{{ $product->image }}" height="50px" width="50px" style="border-radius: 50%;"></td>
                                            <td>{{ $product->name }}</td>
                                            <td class="text-bold-500">{{ $product->quantity }}</td>
                                            <td>{{ number_format($product->price, 3).' VND'}}</td>
                                            <td>
                                                <a class="btn btn-outline-info" href="{{url('admin/products/detail/'.$product->id)}}">
                                                    <i class="bi bi-collection-fill"></i></a>
                                                <a class="btn btn-outline-secondary" href="{{url('admin/products/edit/'.$product->id)}}">
                                                    <i class="bi bi-pen-fill"></i></a>
                                                <a class="btn btn-outline-danger" href="{{url('admin/products/delete/'.$product->id)}}">
                                                    <i class="bi bi-x-octagon-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{ $products->links() }}

@endsection


