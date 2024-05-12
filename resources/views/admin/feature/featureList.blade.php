@extends('admin.index')

@section('title')
    Feature List
@endsection

@section('adminc')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="/feature/create" class="btn btn-primary btn-sm"><h1>Add Feature</h1></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Feature List</li>
                    </ol>
                </div>
            </div>

            
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Feature List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Title</th>
                                    <th>Title1</th>
                                    <th>Details</th>
                                    <th>Button</th>
                                    <th>span</th>
                                    <th>span1</th>
                                    <th>span2</th>
                                    <th>span3</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($feature as $t)
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$t->title}}</td>
                                   <td>{{$t->title1}}</td>
                                   <td>{{$t->details}}</td>
                                   <td>{{$t->btn}}</td>
                                   <td>{{$t->span}}</td>
                                   <td>{{$t->span1}}</td>
                                   <td>{{$t->span2}}</td>
                                   <td>{{$t->span3}}</td>
                                   <td>
                                    <form action="{{ route('feature.destroy', $t->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-md"
                                            onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                                    </form>
                                    <a class="btn btn-primary btn-md" href="{{ route('feature.edit', $t->id) }}">Edit </a>
                                    <a class="btn btn-info btn-md" href="{{ route('feature.show', $t->id) }}">Show</a>
                                   </td>
                               
                                </tr>
                                @endforeach
                               
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection