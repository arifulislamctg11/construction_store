@extends('../layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div><!-- /.col -->
                    
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable </h3>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                        {{session('status')}}
                                </div>
                                
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name </th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->category}}</td>
                                                <td>
                                                    <a href="/categoryedit/{{$row->id}}" ><i class='fas fa-edit'></i></a> 
                                                    <a href="/categorydelete/{{$row->id}}" ><i class='fas fa-trash' style="color: red"></i></a> 
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                               
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>



        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
