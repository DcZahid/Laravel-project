@extends('admin.index')
@section('title')
    Edit feature 
@endsection
@section('adminc')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit feature</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit feature</li>
                    </ol>
                </div>
            </div>
            <div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit feature </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => route('feature.update',$feature->id), 'files' => true,'method'=>'PATCH']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('title', 'title') !!}
                                    {!! Form::text('title',$feature->title, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('title1', 'title1') !!}
                                    {!! Form::text('title1',$feature->title1, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('details', 'details :') !!}
                                    {!! Form::text('details', $feature->details, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('btn', 'btn :') !!}
                                    {!! Form::text('btn', $feature->btn, ['class' => 'form-control']) !!}
                                </div>
                                

                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Form::label('span', 'span :') !!}
                                    {!! Form::text('span', $feature->span, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span1', 'span1 :') !!}
                                    {!! Form::text('span1', $feature->span1, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span2', 'span2 :') !!}
                                    {!! Form::text('span2', $feature->span2, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('span3', 'span3 :') !!}
                                    {!! Form::text('span3', $feature->span3, ['class' => 'form-control']) !!}
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