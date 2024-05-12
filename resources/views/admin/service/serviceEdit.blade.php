@extends('admin.index')
@section('title')
    Service Edit 
@endsection
@section('adminc')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Service</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit service </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('service.update',$service->id), 'files' => true,'method'=>'PATCH']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('photo', 'Upload Photo') !!}
                                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('photo1', 'Upload Photo1') !!}
                                    {!! Form::file('photo1', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('btn', 'btn :') !!}
                                    {!! Form::text('btn', $service->btn, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('title', 'title :') !!}
                                    {!! Form::text('title', $service->title, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('details', 'details :') !!}
                                    {!! Form::text('details', $service->details, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('class', 'class :') !!}
                                    {!! Form::text('class', $service->class, ['class' => 'form-control']) !!}
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