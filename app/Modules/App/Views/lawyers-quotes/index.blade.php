@extends('app')
@section('title')
  E-Lawyers Online - Lawyer's Quotes
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h2 class="margin-bottom-20">
            <strong>Lawyer's Quotes</strong>
          </h2>
          <div class="margin-bottom-30">
            <div style="float:left; padding:0 25px 0 0;"><img src="{{ asset('img/holmes_pic.jpg') }}" width="130" height="150" border="1" align="texttop" /></div>
            <h3 class="text-danger margin-bottom-10">
              <small><i class="fa fa-quote-left"></i> </small>
                Every calling is great when greatly pursued.
              <small><i class="fa fa-quote-right"></i> </small>
            </h3>
            <p>&#8212; <strong>Oliver Wendell Homes, Jr., </strong>U.S. Supreme Court Justice,(March 8, 1841 &#8211; March 6, 1935) an American jurist who served as an Associate Justice of the Supreme Court of the United States from 1902 to 1932. Noted for his long service, his concise and pithy opinions, and his deference to the decisions of elected legislatures, he is one of the most widely cited United States Supreme Court justices in history, particularly for his &quot;clear and present danger&quot; majority opinion in the 1919 case of Schenck v. United States, and is one of the most influential American common law judges. Holmes retired from the Court at the age of 90, making him the oldest Justice in the Supreme Court's history <em>(Wikipedia)</em>.</p>
          </div>
          <hr />
          <div class="margin-bottom-30">
            <div style="float:left; padding:0 25px 0 0;"><img src="{{ asset('img/lincoln_pic.jpg') }}" width="130" height="150" border="1" align="texttop" /></div>
            <h3 class="text-danger margin-bottom-10">
              <small><i class="fa fa-quote-left"></i> </small>
                A lawyer's time and advice are his stock in trade.
              <small><i class="fa fa-quote-right"></i> </small>
            </h3>
            <p>&#8212; <strong>Abraham Lincoln, US President,</strong> (February 12, 1809 &#8211; April 15, 1865) served as the 16th President of the United States from March 1861 until his assassination in April 1865. He successfully led the country through its greatest internal crisis, the American Civil War, preserved the Union, and ended slavery. Reared in a poor family on the western frontier, he was mostly self-educated. He became a country lawyer, an Illinois state legislator, and a one-term member of the United States House of Representatives, but failed in two attempts at a seat in the United States Senate <em>(Wikipedia)</em>.</p>
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