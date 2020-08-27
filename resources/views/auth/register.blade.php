@extends('templates.login')

@section('content')

<div class="page parallel">
    <div class="d-flex row">
        <div class="pt-0 col-md-3 white">
            <div class="pl-5 pr-5 pb-4 mt-5">
                <a href="{{ route('login') }}"><img src="assets/img/basic/logo-webpress.png" style="width:30em" alt=""/></a>
            </div>
            <div class="pl-4 pr-4" style="padding-top: 0px">
                <form class="form-material" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="form-line">
                        <input id="first_name" type="text" class="form-control" placeholder="Nama Depan" name="first_name" value="{{ old('first_name') }}" required autofocus>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="form-line">
                        <input id="last_name" type="text" class="form-control" placeholder="Nama Belakang" name="last_name" value="{{ old('last_name') }}" required autofocus>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-line">
                        <input id="email" type="email" class="form-control" placeholder="Email Kamu" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-line">
                        <input id="password" type="password" class="form-control" placeholder="Masukan Password" name="password" value="{{ old('password') }}" required autofocus>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-line">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
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
                    
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Daftar">
                </form>
            </div>
        </div>
        <div class="col-md-9  height-full blue6 accent-3 align-self-center text-center" data-bg-repeat="false"
             data-bg-possition="center"
             style="background: url('assets/img/basic/student.png') #fff">
        </div>
    </div>
</div>

@endsection