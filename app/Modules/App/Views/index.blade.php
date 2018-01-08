@extends('app')
@section('title')
  E-Lawyers Online - Home
@endsection
@section('content')
<div class="container" id="main">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <div id="carouselExampleIndicators" class="rounded-0 carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_1.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_2.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_3.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_4.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_5.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/banner/banner_6.png') }}" alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-header bg-primary text-white rounded-0">
          <h5>EVERYDAY LAW</h5>
        </div>
        @if (!empty($post))
          <div class="card-body">
            <h4 class="card-title margin-bottom-20">{{ $post->title }}</h4>
            <p class="card-text">
              @php
                $in = strip_tags($post->body);
                $out = strlen($in) > 50 ? substr($in,0,700)."..." : $in;
                echo $out;
              @endphp
            </p>
            <div class="clearfix">
              <a href="{{ route('app.everyday-law.index', $post->slug) }}" class="btn btn-outline-warning float-right">READ MORE &#8811;</a>
            </div>
          </div>
        @endif
      </div>
      <div class="card margin-bottom-20">
        <div class="card-header bg-primary text-white rounded-0">
          <h5>LAW & SOCIETY</h5>
        </div>
        <div class="card-body">
          <div class="row"> 
            <div class="col-md-4">
              <img class="card-img-top" src="{{ asset('img/lawandsociety_pic.jpg') }}" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">You, Facebook and the Law...</h4>
                  <p class="card-text">
                    <em>&quot;Atty., my officemate commented in my Facebook account that &quot;I&#8217;m a whore!&quot;, can I sue her?</em>
                  </p>
                  <div class="clearfix">
                    <a href="{{ route('app.law-and-society.index') }}" class="btn btn-outline-warning float-right">READ MORE &#8811;</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card margin-bottom-20">
        <div class="card-header bg-primary text-white rounded-0">
          <h5>LAW UPDATES</h5>
        </div>
        <div class="card-body">
          <div class="row">
             <div class="col-md-4">
               <img class="card-img-top" src="{{ asset('img/lawupdates.jpg') }}" alt="">
             </div>
             <div class="col-md-8">
              <h4 class="card-title">
                Can your text message or e-mail message be used as evidence in court?
              </h4>
              <p class="card-text">
                Before the advent of computer age, we have been familiar with the use of documentary evidence in court such as...
              </p>
             <div class="clearfix">
                <a href="{{ route('app.law-updates.index') }}" class="btn btn-outline-warning float-right">READ MORE &#8811;</a>
              </div>
             </div>
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
  <script type="text/javascript">
  </script>
@endsection