@extends('app')
@section('title')
  E-Lawyers Online - Everyday Law
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h2 class="margin-bottom-20">
            <strong>Everyday Law</strong>
          </h2>
          <h4 class="margin-bottom-20">{{ $post->title }}</h4>
          {!! $post->body !!}
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
  <script type="text/javascript">
  </script>
@endsection