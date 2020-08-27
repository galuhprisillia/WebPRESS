@extends('templates.master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-taxes"></i>{{ $title_accountancy }}</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2">
                            <i class="icon icon-skyscraper mb-3"></i>{{ $title_officeadministration }}</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3">
                            <i class="icon icon-suitcase2"></i>{{ $title_marketing }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="container-fluid">
                    <div class="card my-3">
                        <div class="card-body">
                            <ol class="breadcrumb font-weight-bold">
                                <li class="breadcrumb-item">
                                    <a href="/homepage">Homepage</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/history">History</a>
                                </li>
                                <li class="breadcrumb-item active"> Accountancy</li>
                            </ol>
                        <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="box white p-2 r-5">
                                        <div class="card my-3">
                                            <div class="card-header bg-primary text-white">
                                                <h3>Prediction System Result</h3>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            @if (count($accountancy_list) > 0)
                                            <table class="table table-bordered">
                                                <thead class="font-weight-bold">
                                                    <th style="width: 5px"> No. </th>
                                                    <th style="width: 230px"> STUDENT NAME </th>
                                                    <th style="width: 150px"> NISN </th>
                                                    <th> STATUS </th>
                                                    <th> UNIVERSITY </th>
                                                    <th> DATE CREATED </th>
                                                    <th> DATE UPDATED </th>
                                                    <th style="width: 150px"> OPTION </th>
                                                </thead>
                                                <tbody>
                                                    @foreach($accountancy_list as $index => $accountancy)
                                                    <tr>
                                                        <td>{{ $index +1 }}</td>
                                                        <td>{{ $accountancy->student_name }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                <button type="button" class="btn btn-white" data-toggle="modal" data-target={{'#' . $accountancy->nisn }}>
                                                                    {{$accountancy->nisn }}
                                                                </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id={{$accountancy->nisn}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">{{$accountancy->student_name }} | {{$accountancy->nisn }}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <img src="{{ asset('/' . $accountancy->nisn . '.png') }}" alt="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $accountancy->status }}</td>
                                                        <td>{{ $accountancy->university }}</td>
                                                        <td>{{ $accountancy->created_at }}</td>
                                                        <td>{{ $accountancy->updated_at }}</td>
                                                        <td>
                                                            <div class="row ">
                                                                <div class="col-lg-4">
                                                                {{ link_to('prediction-system/accountancy/' . $accountancy->id . '/edit', 'EDIT', ['class' => 'btn btn-success btn-sm']) }}
                                                                </div>
                                                                <div class="col-lg-4">
                                                                {!! Form::open(['method' => 'DELETE', 'action' => ['AccountancyController@destroy', $accountancy->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                                {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <p>Tidak ada data Jurusan.</p>
                                            @endif

                                            <div class="table-nav">
                                                <div class="float-left">
                                                    <strong> Jumlah Data: {{ $accountancy_summary }} </strong>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <ul class="pagination pagination-sm no-margin float-right">
                                                    <li>{{ $accountancy_list->links() }}</li>
                                                    </ul>
                                                    {{ link_to('prediction-system/', 'Back to Prediction', ['class' => 'btn btn-primary float-right mr-4']) }}
                                                    {!! Form::open(['method' => 'DELETE', 'url' => 'prediction-system/accountancy/delete' ]) !!}
                                                        {!! Form::submit('Delete All Data', ['class' => 'btn btn-danger float-right mr-4 btn-sm']) !!}
                                                    {!! Form::close() !!}
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
            <div class="tab-pane animated fadeInUpShort" id="v-pills-2">
                <div class="container-fluid">
                    <div class="card my-3">
                        <div class="card-body">
                            <ol class="breadcrumb font-weight-bold">
                                <li class="breadcrumb-item">
                                    <a href="/homepage">Homepage</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/history">History</a>
                                </li>
                                <li class="breadcrumb-item active"> Office Administration</li>
                            </ol>
                        <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="box white p-2 r-5">
                                        <div class="card my-3">
                                            <div class="card-header bg-primary text-white">
                                                <h3>Prediction System Result</h3>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            @if (count($officeadministration_list) > 0)
                                            <table class="table table-bordered">
                                                <thead class="font-weight-bold">
                                                    <th style="width: 5px"> No. </th>
                                                    <th style="width: 230px"> STUDENT NAME </th>
                                                    <th> NISN </th>
                                                    <th> STATUS </th>
                                                    <th> UNIVERSITY </th>
                                                    <th> DATE CREATED </th>
                                                    <th> DATE UPDATED </th>
                                                    <th style="width: 150px"> OPTION </th>
                                                </thead>
                                                <tbody>
                                                    @foreach($officeadministration_list as $index => $officeadministration)
                                                    <tr>
                                                        <td>{{ $index +1 }}</td>
                                                        <td>{{ $officeadministration->student_name }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                <button type="button" class="btn btn-white" data-toggle="modal" data-target={{'#' . $officeadministration->nisn }}>
                                                                    {{$officeadministration->nisn }}
                                                                </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id={{$officeadministration->nisn}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">{{$officeadministration->student_name }} | {{$officeadministration->nisn }}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <img src="{{ asset('/' . $officeadministration->nisn . '.png') }}" alt="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>{{ $officeadministration->status }}</td>
                                                        <td>{{ $officeadministration->university }}</td>
                                                        <td>{{ $officeadministration->created_at }}</td>
                                                        <td>{{ $officeadministration->updated_at }}</td>
                                                        <td>
                                                            <div class="row ">
                                                                <div class="col-lg-4">
                                                                {{ link_to('prediction-system/officeadministration/' . $officeadministration->id . '/edit', 'EDIT', ['class' => 'btn btn-success btn-sm']) }}
                                                                </div>
                                                                <div class="col-lg-4">
                                                                {!! Form::open(['method' => 'DELETE', 'action' => ['OfficeAdministrationController@destroy', $officeadministration->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                                {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <p>Tidak ada data Jurusan.</p>
                                            @endif

                                            <div class="table-nav">
                                                <div class="float-left">
                                                    <strong> Jumlah Data: {{ $officeadministration_summary }} </strong>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <ul class="pagination pagination-sm no-margin float-right">
                                                    <li>{{ $officeadministration_list->links() }}</li>
                                                    </ul>
                                                    {{ link_to('prediction-system/', 'Back to Prediction', ['class' => 'btn btn-primary float-right mr-4']) }}
                                                    {!! Form::open(['method' => 'DELETE', 'url' => 'prediction-system/officeadministration/delete' ]) !!}
                                                        {!! Form::submit('Delete All Data', ['class' => 'btn btn-danger float-right mr-4 btn-sm']) !!}
                                                    {!! Form::close() !!}
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
            <div class="tab-pane animated fadeInUpShort" id="v-pills-3">
                <div class="container-fluid">
                    <div class="card my-3">
                        <div class="card-body">
                            <ol class="breadcrumb font-weight-bold">
                                <li class="breadcrumb-item">
                                    <a href="/homepage">Homepage</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/history">History</a>
                                </li>
                                <li class="breadcrumb-item active"> Marketing</li>
                            </ol>
                        <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="box white p-2 r-5">
                                        <div class="card my-3">
                                            <div class="card-header bg-primary text-white">
                                                <h3>Prediction System Result</h3>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            @if (count($marketing_list) > 0)
                                            <table class="table table-bordered">
                                                <thead class="font-weight-bold">
                                                    <th style="width: 5px"> No. </th>
                                                    <th style="width: 230px"> STUDENT NAME </th>
                                                    <th> NISN </th>
                                                    <th> STATUS </th>
                                                    <th> UNIVERSITY </th>
                                                    <th> DATE CREATED </th>
                                                    <th> DATE UPDATED </th>
                                                    <th style="width: 150px"> OPTION </th>
                                                </thead>
                                                <tbody>
                                                    @foreach($marketing_list as $index => $marketing)
                                                    <tr>
                                                        <td>{{ $index +1 }}</td>
                                                        <td>{{ $marketing->student_name }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                <button type="button" class="btn btn-white" data-toggle="modal" data-target={{'#' . $marketing->nisn }}>
                                                                    {{$marketing->nisn }}
                                                                </button>
                                                                </div>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id={{$marketing->nisn}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">{{$marketing->student_name }} | {{$marketing->nisn }}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <img src="{{ asset('/' . $marketing->nisn . '.png') }}" alt="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $marketing->status }}</td>
                                                        <td>{{ $marketing->university }}</td>
                                                        <td>{{ $marketing->created_at }}</td>
                                                        <td>{{ $marketing->updated_at }}</td>
                                                        <td>
                                                            <div class="row ">
                                                                <div class="col-lg-4">
                                                                {{ link_to('prediction-system/marketing/' . $marketing->id . '/edit', 'EDIT', ['class' => 'btn btn-success btn-sm']) }}
                                                                </div>
                                                                <div class="col-lg-4">
                                                                {!! Form::open(['method' => 'DELETE', 'action' => ['MarketingController@destroy', $marketing->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                                {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <p>Tidak ada data Jurusan.</p>
                                            @endif

                                            <div class="table-nav">
                                                <div class="float-left">
                                                    <strong> Jumlah Data: {{ $marketing_summary }} </strong>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <ul class="pagination pagination-sm no-margin float-right">
                                                    <li>{{ $marketing_list->links() }}</li>
                                                    </ul>
                                                    {{ link_to('prediction-system/', 'Back to Prediction', ['class' => 'btn btn-primary float-right mr-4']) }}
                                                    {!! Form::open(['method' => 'DELETE', 'url' => 'prediction-system/marketing/delete' ]) !!}
                                                        {!! Form::submit('Delete All Data', ['class' => 'btn btn-danger float-right mr-4 btn-sm']) !!}
                                                    {!! Form::close() !!}
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
        </div>
    </div>
</div>
@endsection