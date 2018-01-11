@extends('app')
@section('title')
  E-Lawyers Online - Our Online Legal Services
@endsection
@section('content')
<div class="container">
  @if(!Auth::check())
    <div class="alert alert-info">
      <a href="{{ route('register') }}">Sign up</a> or <a href="#" class="focus-login">Login</a> to avail our legal services
    </div>
  @endif
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-30">
            <strong>Our Online Legal Services</strong>
          </h3>
          <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
            <a name="per-query" class="anchor">&nbsp;</a>
            @include('legal-services.partials.per-query')
            <a name="video-conference" class="anchor">&nbsp;</a>
            @include('legal-services.partials.video-conference')
            <a name="office-conference" class="anchor">&nbsp;</a>
            @include('legal-services.partials.office-conference')
            <a name="monthly-retainer" class="anchor">&nbsp;</a>
            @include('legal-services.partials.monthly-retainer')
            <a name="case-project-retainer" class="anchor">&nbsp;</a>
            @include('legal-services.partials.case-project-retainer')
          </div>
        </div>
      </div>
      @include('ads.big')
    </div>
    <div class="col-md-4">
      @if (Auth::check())
        @include('auth.user-info-partial')
      @else
        @include('auth.login-partial')
      @endif
      @include('layouts.side-navigator')
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection