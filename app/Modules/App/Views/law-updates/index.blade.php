@extends('app')
@section('title')
  E-Lawyers Online - Law Updates
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20"><strong>Law Updates</strong></h3>
          <div style="float:left;">
            <h4 class="margin-bottom-20">
              <a href="{{ route('app.e-legal-news.index') }}" target="_self">
                <strong>
                  E-Legal News
                </strong>
              </a>
            </h4>
            <div style="float:left; padding:0 25px 25px 0;"><img src="{{ asset('img/lawupdates.jpg') }}" width="250" height="172" border="0" align="texttop" /></div>
            <h4 class="margin-bottom-20">
              <strong>
                Can  your text message or e-mail message be used as evidence in court?
              </strong>
            </h4>
            <p>Before  the advent of computer age, we have been familiar with the use of documentary  evidence in court such as contracts, agreements, letters and other writings.  These writings printed in papers or paper-based documents are popularly known  then as our documentary evidence. At that time, text message or e-mail message,  as it was not yet widely used and known in the Philippines, are not considered  as documentary evidence by our courts of law.
             <div class="clearfix">
                <a href="{{ route('app.e-legal-news.index') }}" class="btn btn-outline-warning float-right">READ MORE &#8811;</a>
              </div>
            </p>
          </div>
          <div>
          <h4 class="margin-bottom-20">
            <a href="{{ route('app.case-studies.index') }}" target="_self">
              <strong>
                Case Studies
              </strong>
            </a>
          </h4>
          <div style="float:left; padding:0 25px 25px 0;"><img src="{{ asset('img/casestudy_pic.jpg') }}" width="250" height="150" border="0" align="texttop" /></div>
          <h4>
            <strong>
              &quot;Swipe Your Credit Card Tears Away: The Case of Reduced Credit Card Interest Rate and Penalty Charge&quot;
            </strong>
          </h4>
            <p>
              It has been a common conversation among credit card holders the harsh interest rate as well as the penalty charge being imposed against them by credit card companies. With the recent ruling of the Supreme Court in the case entitled <em><strong>&quot;Ilenea Dr. Macalinao, petitioner, vs. Bank of Philippine Islands, respondent&quot;</strong></em>, docketed as G.R. No. 174590 and promulgated on September 17, 2009, it is now settled that an imposition by credit companies of 3% interest rate per month and a 3% penalty charge per month is invalid for being unconscionable or <em>&quot;</em>unreasonably excessive.<em>&quot;</em>
              <div class="clearfix">
                <a href="{{ route('app.case-studies.index') }}" class="btn btn-outline-warning float-right">READ MORE &#8811;</a>
              </div>
            </p>
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