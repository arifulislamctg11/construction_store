@extends('../layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/addproduct" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productName">Product Name </label>
                            <input type="text" name="name" class="form-control" id="productName"
                                placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description"
                                placeholder="Description">
                        </div>
                        {{-- <div class="form-group">
                            <label for="InputCategory">Category</label>
                            <input type="text" name="category_id" class="form-control" id="category" placeholder="Category">
                        </div> --}}

                        <div class="form-group">
                            <label for="category_id">Category </label>
                            <select class="custom-select form-control-border" id="category_id" name="category_id">
                                @foreach ($categories as $cate)
                                    {{-- <p>This is user {{ $cate->id }}</p> --}}
                                    <option value="{{ $cate->id }}">{{ $cate->category }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
                        </div>
                        {{-- <p>{{$categories}}</p> --}}




                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/products" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </section>



        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
