@extends('templates.master')

@section('content')
<div class="page has-sidebar-left">
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-body">
                <h4 class="card-title"> Jurusan </h4>
                <hr>
                <div class="card-body p-0 bg-white slimScroll" data-height="300">
                    <div class="table-responsive">
                        @if (count($daftar_jurusan) > 0)
                        <table class="table table-hover">
                            <!-- Table heading -->
                            <tbody>
                            <tr class="no-b">
                                <th>No.</th>
                                <th>Jurusan</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            @foreach($daftar_jurusan as $index => $jurusan)
                            <tr>
                                <td>
                                    {{ $index +1 }}
                                </td>
                                <td>
                                    {{ link_to('jurusan/' . $jurusan->nama_jurusan, $jurusan->nama_jurusan, ['class' => '']) }}
                                </td>
                                <td>
                                    {{ $jurusan->created_at }}
                                </td>
                                <td>
                                    @if (Auth::check())
                                    <div class="row col-lg-6">
                                        <div>
                                            {{ link_to('jurusan/' . $jurusan->id . '/edit', 'Edit', ['class' => 'btn btn-primary btn-sm']) }}
                                        </div>
                                        <div class="col-lg-2">
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['JurusanController@destroy', $jurusan->id]]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <p>Tidak ada data Jurusan.</p>
                        @endif
                    </div>
                </div>
                <hr>
                <a href="/jurusan/create" class="btn btn-sm btn-danger float-right">Tambah Jurusan</a>
            </div>
        </div>
        <!--Style Start 2-->
        
    </div>
</div>
@endsection