@if (isset($jurusan))
    {!! Form::hidden('id', $jurusan->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_jurusan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group row">
@endif
    {!! Form::label('nama_jurusan', 'Nama Jurusan', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('nama_jurusan', null, ['class' => 'form-control col-sm-8', 'placeholder' => 'contoh: Bisnis Pemasaran']) !!}
    </div>
    @if ($errors->has('nama_jurusan'))
        <span class="help-block">{{ $errors->first('jurusan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('link_jurusan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group row">
@endif
    {!! Form::label('link_jurusan', 'Link', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('link_jurusan', null, ['class' => 'form-control col-sm-8', 'placeholder' => 'contoh: bisnis-pemasaran']) !!}
    </div>
    @if ($errors->has('link_jurusan'))
        <span class="help-block">{{ $errors->first('jurusan') }}</span>
    @endif
</div>

@if ($errors->any())
    <div class="form-group {{ $errors->has('created_by') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group row">
@endif
    {!! Form::label('created_by', 'Created By', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::select('created_by', $daftar_email, null, ['class' => 'form-control col-sm-8', 'placeholder' => 'pilih semester untuk mata pelajaran tersebut']) !!}
    </div>
    @if ($errors->has('created_by'))
        <span class="help-block">{{ $errors->first('jurusan') }}</span>
    @endif
</div>

<hr>
<div class="form-group row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-10">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm btn-primary float-left']) !!}
    </div>
</div>
