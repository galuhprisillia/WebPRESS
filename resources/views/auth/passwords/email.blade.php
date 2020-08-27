@extends('templates.login')

@section('content')
<main>
    <div id="primary" class="blue4 p-t-b-100 height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../assets/img/basic/horror.png" style="width:30em" alt="">
                </div>
                <div class="col-lg-6 p-t-80">
                    <div class="text-white">
                        <h1>Reset Password Here!</h1>
                        <p class="s-18 p-t-b-20 font-weight-lighter">Type your mail below, and we will send you link to reset your password..</p>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group has-icon{{ $errors->has('email') ? ' has-error' : '' }}"><i class="icon-envelope-o"></i>
                                    <input id="email" type="email" class="form-control form-control-lg no-b" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="Send Me Link">
                                <div class="text-center" style="padding-top: 20px;">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
