@extends('app')
@section('title')
  E-Lawyers Online - Outradeous Laws & Lawsuits
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Outradeous Laws & Lawsuits</strong>
          </h3>
          <div class="margin-bottom-20">
            <div style="float:left; padding:0 25px 0 0;"><img src="{{ asset('img/outrageouslaw_pic.jpg') }}" width="130" height="196" border="1" /></div>
            <p>In 1930,  the City Council of Ontario (California) passed an ordinance that forbids  roosters to crow within the city limits. (USA &#8211; from <a href="http://www.loonylaws.com/California.htm">http://www.loonylaws.com/California.htm</a>)</p>
            <p>San Francisco  is said to be the only city in the nation to have ordinances guaranteeing  sunshine to the masses. (USA &#8211; from <a href="http://www.loonylaws.com/California.htm">http://www.loonylaws.com/California.htm</a>)</p>
            <p>It is  illegal to get a fish drunk in Pennsylvania (USA).</p>
            <p>There is a law in France to those wishing to use  a television must apply for a license (France).</p>
          </div>
          <div class="margin-bottom-20">
            <h3 class="margin-bottom-20"><strong>Outrageous Lawsuits</strong></h3>
            <h4 class="margin-bottom-20">
              <strong>
                Michael Jordan sued by his look-alike for U.S.$892 Million damages
              </strong>
            </h4>
            <p>In July of 2006, a man claimed to be a Michael Jordan  look-alike by the name of Allen Heckard filed a lawsuit against &quot;His Airness&quot;  alleging that he suffered emotional trauma because of his resemblance to the  said sports idol. He filed his case at the Washington County Court in Oregon claiming  a $832 million dollar damages because of his long suffering of always being  mistaken as Michael Jordan. While he wears Air Jordan shoes, he gave an example  of his suffering being a Jordan look-alike during basketball games wherein his  opponent in the court always expect him to play like Jordan.</p>
            <h4 class="margin-bottom-20">
              <strong>
                Robber Sued Homeowner Insurance for Being Trapped  By a Malfunctioning Door
              </strong>
            </h4>
            <p>After robbing a house left by the owner for  vacation in October 1998, Terrence Dickson of Bristol Pennsylvania was on is  way out via the garage but because of malfunctioning automatic door opener, he  was not able to exit and was not able to re-enter the house because it was  locked. Trapped in the garage for 8 days drinking a case of Pepsi and eating a  large bag of dry dog food for his sustenance, Mr. Dickson sued the homeowner's  insurance alleging that he suffered mental anguish during the ordeal. The jury awarded  him more or less a half million dollars of damages. </p>
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