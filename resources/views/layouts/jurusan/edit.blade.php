@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <h4 class="card-title"> Tambah Jurusan </h4>
                <hr>
                {!! Form::model($jurusan, ['method' => 'PATCH', 'action' => ['JurusanController@update', $jurusan->id]]) !!}
                @include('layouts.jurusan.form', ['submitButtonText' => 'Update Jurusan'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection