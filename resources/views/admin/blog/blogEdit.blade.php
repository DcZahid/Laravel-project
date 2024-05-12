@extends('admin.index')

@section('title')
    Add Blog News
@endsection

@section('adminc')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Blog News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Blog News</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Blog News </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('blog.update',$blog->id), 'files' => true, 'method'=>'PATCH']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('photo', 'Upload Photo') !!}
                                        {!! Form::file('photo', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('details', 'details :') !!}
                                        {!! Form::text('details', $blog->details, ['class' => 'form-control']) !!}
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('date', 'date :') !!}
                                        {!! Form::text('date', $blog->date, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('btn', 'btn :') !!}
                                        {!! Form::text('btn', $blog->btn, ['class' => 'form-control']) !!}
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                         <div class="card-footer">
                            {{-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} --}}
                            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                        </div> 
                        {!! Form::close() !!}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
@endsection