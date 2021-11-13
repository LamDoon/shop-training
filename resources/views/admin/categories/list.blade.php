@extends('admin.main')
@section('content')
    <?php $i=0; ?>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Categories</h3>

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

                @include('admin.alert')

            <!-- Striped rows start -->
            <a class="btn btn-primary" style="float: right; " href="{{url('admin/categories/create')}}">Create new</a>
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
                                            <th>NAME</th>
                                            <th>SLUG</th>
                                            <th>BANNER</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $cate)
                                        <tr>
                                            <td class="text-bold-500">{{++$i}}</td>
                                            <td>{{ $cate->name }}</td>
                                            <td class="text-bold-500">{{ $cate->slug }}</td>
                                            <td><img src="/upload/categories/{{ $cate->banner }}" height="100px" width="150px"></td>
                                            <td>
                                                <a class="btn btn-outline-secondary" href="{{url('admin/categories/edit/'.$cate->id)}}"><i class="bi bi-pen-fill"></i></a>
                                            <a class="btn btn-outline-danger" href="{{url('admin/categories/delete/'.$cate->id)}}">
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

        {{ $categories->links() }}


@endsection
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function removeRow(id) {
        if(confirm('Bạn có chắc chắn muốn xoá danh mục?'+id)){
            $.ajax({
                type: 'DELETE',
                datatype: 'JSON',
                data: {id},
                url: 'admin/categories/delete/'+id,
                success: function (result) {
                    if (result.error == false){
                        alert(result.message);
                        location.reload();
                    }else {
                        alert('Xoá lỗi, vui lòng thử lại.');
                    }

                }
            });
        }

    }

</script>

