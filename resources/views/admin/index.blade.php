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
                    <li class="breadcrumb-item active"> User </li>
                </ol>
            <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box white p-2 r-5">
                            <div class="table-nav">
                                <div class="box-footer clearfix">
                                    {{ link_to('user/create', 'Add User', ['class' => 'btn btn-danger float-right']) }}
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header bg-primary text-white">
                                    <h3>List of User</h3>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                @if (count($user_list) > 0)
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th style="width: 180px">Level</th>
                                            <th style="width: 130px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        <?php foreach($user_list as $user): ?>
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->first_name .' ' . $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        {{ link_to('user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                                                    </div>
                                                    <div class="col-lg-4">
                                                        {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            @else
                                <p>Tidak ada data user.</p>
                            @endif
                            <div class="table-nav">
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin float-right">
                                        <li>{{ $user_list->links() }}</li>
                                    </ul>
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