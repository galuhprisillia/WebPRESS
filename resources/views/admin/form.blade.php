{{ csrf_field() }}

<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    <div class="form-line">
    {!! Form::label('first_name', 'First Name', ['class' => 'float-left form-font-size']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'ex. galuh']) !!}
    @if ($errors->has('first_name'))
        <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
    @endif
    </div>
</div>






















<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    <div class="form-line">
    {!! Form::label('last_name', 'Last Name', ['class' => 'float-left form-font-size']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'ex. prisillia']) !!}
    @if ($errors->has('last_name'))
        <span class="help-block">
            <strong>{{ $errors->first('last_name') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <div class="form-line">
    {!! Form::label('email', 'Email', ['class' => 'float-left form-font-size']) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'galuhprisillia@gmail.com']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
    <div class="form-line">
    {!! Form::label('level', 'Level', ['class' => 'float-left form-font-size']) !!}
    {!! Form::select('level', ['admin' => 'Administrator', 'operator' => 'Operator'], null, ['class' => 'form-control']); !!}
    @if ($errors->has('level'))
        <span class="help-block">
            <strong>{{ $errors->first('level') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="form-line">
    {!! Form::label('password', 'Password', ['class' => 'float-left form-font-size']) !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'min 6 length']) !!}
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    </div>
</div>

<div class="form-group">
    <div class="form-line">
    {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'float-left form-font-size']) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'min 6 length']) !!}
    </div>
</div>

<div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
    <div class="form-check">
    <input type="checkbox" class="form-check-input" name="term" value="1" {{ old('term') ? 'checked="checked"' : '' }}/> Agree with the terms and conditions
    <a href="#"> Read Term and Condition</a>
    @if ($errors->has('term'))
        <span class="help-block">
            <strong>{{ $errors->first('term') }}</strong>
        </span>
    @endif
    </div>
</div>
<input type="submit" class="btn btn-success btn-lg btn-block" value="Add User">