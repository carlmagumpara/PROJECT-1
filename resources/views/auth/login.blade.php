@extends('app')
@section('title')
  E-Lawyers Online - Login
@endsection
@section('content')
<div class="container min-height-100-vh">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="animated bounceInDown">
        <div class="text-center margin-top-30 margin-bottom-30">
          <a href="{{ route('app.index') }}">
            <img src="{{ asset('img/logo.png') }}" class="" alt="e-lawyers online logo">
          </a>
        </div>
        @include('auth.login-partial')
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection