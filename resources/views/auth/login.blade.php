@extends('templates.login')

@section('content')
<main>
    <div id="primary" class="white p-t-b-100 height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/basic/login.gif" style="width:30em" alt="">
                </div>
                <div class="col-lg-6 p-t-80">
                    <div class="text-purple">
                        <h1>Login to WebPRESS</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Please Enter Your Email and Password to Start New Prediction</p>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon{{ $errors->has('email') ? 'has-error' : '' }}"><i class="icon-envelope-o"></i>
                                    <input id="email" type="email" class="shadow form-control form-control-lg no-b" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group has-icon{{ $errors->has('password') ? ' has-error' : '' }}"><i class="icon-user-secret"></i>
                                    <input id="password" type="password" class="shadow form-control form-control-lg no-b" placeholder="Password Address" name="password" value="{{ old('password') }}" required autofocus">

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="Let me enter">
                                <div class="text-center" style="padding-top: 20px;">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>
@endsection