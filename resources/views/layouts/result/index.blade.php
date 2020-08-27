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
                    <li class="breadcrumb-item active">{{  $title_vocational }}</li>
                </ol>
            <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box white p-2 r-5">
                            <div class="table-nav">
                                @if (Auth::check())
                                <div class="box-footer clearfix">
                                    {{ link_to('prediction-system/' . $link_vocational  . '/create', 'Create Prediction', ['class' => 'btn btn-danger float-right']) }}
                                    {{ link_to('prediction-system/' . $link_vocational  . '/export', 'Export Data', ['class' => 'btn btn-success float-right mr-2'])  }}
                                </div>
                                @endif
                            </div>
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <h3>Prediction System Result</h3>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                @if (count($result_list) > 0)
                                <table class="table table-bordered">
                                    <thead class="font-weight-bold">
                                        <th style="width: 5px"> No. </th>
                                        <th style="width: 350px"> STUDENT NAME </th>
                                        <th> NISN </th>
                                        <th> STATUS </th>
                                        <th> UNIVERSITY </th>
                                    </thead>
                                    <tbody>
                                        @foreach($result_list as $index => $result)
                                        <tr>
                                            <td>{{ $index +1 }}</td>
                                            <td>{{ $result->student_name }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                    <button type="button" class="btn btn-white" data-toggle="modal" data-target={{'#' . $result->nisn }}>
                                                        {{$result->nisn }}
                                                    </button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id={{$result->nisn}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">{{$result->student_name }} | {{$result->nisn }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset('/' . $result->nisn . '.png') }}" alt="">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $result->status }}</td>
                                            <td>{{ $result->university }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <p>Tidak ada data Jurusan.</p>
                                @endif

                                <div class="table-nav">
                                    <div class="float-left">
                                        <strong> Jumlah Data: {{ $result_summary }} </strong>
                                    </div>
                                    <div class="box-footer clearfix">
                                        <ul class="pagination pagination-sm no-margin float-right">
                                        <li>{{ $result_list->links() }}</li>
                                        </ul>
                                        {{ link_to('prediction-system/', 'Back', ['class' => 'btn btn-danger float-right mr-4']) }}
                                    </div>
                                </div>
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