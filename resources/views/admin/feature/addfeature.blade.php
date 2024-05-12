@extends('admin.index')
@section('title')
    Add feature 
@endsection
@section('adminc')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add feature</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add feature</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add feature </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('feature.store'), 'files' => true]) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('title', 'title') !!}
                                    {!! Form::text('title','', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('title1', 'title1') !!}
                                    {!! Form::text('title1','', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('details', 'details :') !!}
                                    {!! Form::text('details', '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('btn', 'btn :') !!}
                                    {!! Form::text('btn', '', ['class' => 'form-control']) !!}
                                </div>
                                

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('span', 'span :') !!}
                                    {!! Form::text('span', '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span1', 'span1 :') !!}
                                    {!! Form::text('span1', '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span2', 'span2 :') !!}
                                    {!! Form::text('span2', '', ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span3', 'span3 :') !!}
                                    {!! Form::text('span3', '', ['class' => 'form-control']) !!}
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