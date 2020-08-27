@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <h4 class="card-title"> Tambah Jurusan </h4>
                <hr>
                {!! Form::open(['url' => 'jurusan']) !!}
                    @include('layouts.jurusan.form', ['submitButtonText' => 'Tambah'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection