@extends('layouts.admin-login')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="#"><img src="{{ asset('img/logo.png') }}"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="text-center">ADMIN LOGIN</h3>
    <p class="login-box-msg">Sign in to start your session</p>

    <form role="form" method="POST" action="{{ url('admin/login') }}">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback">
        </span>

          @if ($errors->has('email'))
              <span>
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback">
        </span>

          @if ($errors->has('password'))
              <span>
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif

      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
