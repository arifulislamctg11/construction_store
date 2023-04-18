@extends('../layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Details </h1>
                    </div><!-- /.col -->
                    
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Product Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/product-update/{{$product->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productName">Product Name </label>
                            <input type="text" name="product_name" class="form-control" id="productName" value="{{$product->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" value="{{$product->description}}">
                        </div>
                        

                        <div class="form-group">
                            <label for="role">Category</label>
                        <select name="category_id" class="form-control" id="role" value="{{$product->category->category}}">
                            @foreach ($product as $item)
                                
                            <option>{{$item}}</option>
                            @endforeach
                            
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="{{$product->price}}">
                        </div>
               



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
