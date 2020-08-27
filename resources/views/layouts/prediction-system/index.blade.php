@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <ol class="breadcrumb font-weight-bold">
                    <li class="breadcrumb-item">
                        <a href="/homepage">Homepage</a>
                    </li>
                    <li class="breadcrumb-item active">Prediction System</li>
                </ol>
                <hr>
        
                <div class="cards-list">
                    @foreach($daftar_jurusan as $jurusan)
                    <a href="{{ url('prediction-system/' . $jurusan->link_jurusan .'/result') }}" class="mycard 1">
                        <div class="card_image"> <img src="{{ 'assets/img/jurusan/'. $jurusan->link_jurusan . '.png' }}"/> </div>
                        <div class="card_title title-white">
                            <p>{{ $jurusan->nama_jurusan }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection