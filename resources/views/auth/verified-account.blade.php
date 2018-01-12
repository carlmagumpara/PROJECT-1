@extends('app')
@section('title')
  E-Lawyers Online - Account Verified
@endsection
@section('content')
<div class="container min-height-100-vh">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="">
        <div class="text-center margin-top-30 margin-bottom-30">
          <a href="{{ route('app.index') }}">
            <img src="{{ asset('img/logo.png') }}" class="" alt="e-lawyers online logo">
          </a>
        </div>
        <div class="card">
          <div class="card-body text-center">
            <h3 class="margin-bottom-20">
              <strong>{{ $message }}</strong>
            </h3>
            <p class="lead">Please click <a href="{{ route('login') }}">here</a> to login.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

    });
  </script>
@endsection