<div class="card margin-bottom-20">
  <div class="card-body">
    <h4 class="margin-bottom-20">LOGIN</h4>
    <div id="login-alert"></div>
    <form role="form" method="POST" action="{{ url('/login') }}" id="login-form" autocomplete="off">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
          <label for="email" class="control-label">E-Mail Address</label>
          <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
          <label for="password" class="control-label">Password</label>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" autocomplete="new-password" required>
      </div>
      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
          </label>
        </div>
      </div>
      <div class="clearfix">
        <button type="submit" class="btn btn-primary margin-left-10 float-right">
          LOGIN
        </button>
        <a href="{{ url('/register') }}" class="btn btn-secondary text-light float-right">
          SIGN UP
        </a>
      </div>
      <div class="text-center">
        <a class="btn btn-link" href="{{ url('/password/reset') }}">
          Forgot Your Password?
        </a>
      </div>
      <p>Sign in with</p>
      <button type="button" class="btn btn-block text-light" style="background-color: #3B5998;"><i class="fa fa-facebook-official" aria-hidden="true"></i> FACEBOOK</button>
    </form>
  </div>
</div>