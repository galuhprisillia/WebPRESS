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
                    <li class="breadcrumb-item active">Upload</li>
                </ol>
                <hr>
                {{-- notifikasi form validasi --}}
                @if ($errors->has('file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
                @endif

                {{-- notifikasi sukses --}}
                @if ($sukses = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $sukses }}</strong>
                </div>
                @endif

                <div class="cards-list">
                    @foreach($daftar_jurusan as $jurusan)
                    <a href="" class="mycard 1" data-toggle="modal" data-target="{{ '#importExcel' . $jurusan->link_jurusan  }}">
                        <div class="card_image"> <img src="{{ 'assets/img/jurusan/'. $jurusan->link_jurusan . '.png' }}"/> </div>
                        <div class="card_title title-white">
                            <p>{{ $jurusan->nama_jurusan }}</p>
                        </div>
                    </a>
                    

                    <!-- Import Excel -->
                    <div class="modal fade" id="{{ 'importExcel' . $jurusan->link_jurusan  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post" action="{{ url('upload/' . $jurusan->link_jurusan .'/import') }}" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                    </div>
                                    <div class="modal-body">
            
                                        {{ csrf_field() }}
            
                                        <label>Pilih file excel</label>
                                        <div class="form-group">
                                            <input type="file" name="file" required="required">
                                        </div>
            
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection