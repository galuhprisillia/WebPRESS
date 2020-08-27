@extends('templates.master')

@section('content')
<div class="page has-sidebar-left height-full">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
            <ol class="breadcrumb font-weight-bold">
                <li class="breadcrumb-item">
                    <a href="/homepage">Homepage</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/prediction-system">Prediction System</a>
                </li>
                <li class="breadcrumb-item active">{{ $title_vocational }}</li>
            </ol>
            <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box white p-2 r-5">
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <h3>Student Data Form & Semester Score</h3>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                {!! Form::open(['url' => 'prediction-system/marketing' ]) !!}
                                    @include('layouts.marketing.form')
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection