@extends('app')
@section('title')
  E-Lawyers Online - About Us
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h2 class="margin-bottom-20"><strong>About  Us</strong></h2>
          <p>This  website is created not for lawyers but for ordinary people who wants to be  knowledgeable and guided by the law. This is especially created for our Overseas Filipinos (OFs) who  continuously struggle to earn amidst being away from their loved ones and to  Foreign Investors who trust that there are opportunities here in the  Philippines and help boost our economy and generate jobs for Filipinos.</p>
          <h3 class="margin-bottom-20">Brief  History</h3>
          <p><strong><a href="{{ route('app.index') }}" target="_self">E-Lawyers Online</a></strong> is the online legal consultation platform of Valderama Law Office. This means you can access legal advice and documents online. This is new in the Philippines but has been  existing in other countries. Atty. Marlon P. Valderama is the one behind this  very accesible virtual law office. A virtual law  office (VLO) is a professional law practice that exists online through a secure  portal and is accessible to the client and the attorney anywhere that have  access the Internet. A virtual law office allows for secure personal communication  between an online client and his or her virtual attorney. <br /></p>
          <p><strong><a href="{{ route('app.lawyers-profile.index') }}" target="_self">Atty. Marlon P. Valderama</a></strong> is the  Founder of E-Lawyers Online and Managing Partner of Valderama Law Office. His professional dealings with Overseas Filipinos (OFs) and foreigner  investors were the motivations to establish E-Lawyers Online Website, a medium  or tool for those clients here and abroad to obtain legal services and advice  online. The Website utilizes Internet technology as vehicle for client to  obtain legal advice or services without leaving the comforts of their home.  It&#8217;s noble purpose is best exemplified in its tagline &#8220;<em>Legal advice and knowledge just a click away&#8221;</em>.</p>
          <p><strong>&#8220;Elawyering&#8221 </strong> means a secure,  professional method of delivering legal services online that is accessible to  the client and the attorney anywhere they may access the Internet. The use of  an online client portal allows for the initiation of the attorney/client  relationship through to completion and payment for legal services (Stephanie  Kimbro, Esq., MA, JD). E-Lawyers Online is now pioneering in this field of legal practice.</p>
          <h3 class="margin-bottom-20">Our Security Certificates</h3>
          <div class="float-left">
            <img src="{{ asset('img/secure_icon.jpg') }}" width="150"/>
          </div>
          <p> Aside from the inviolability of lawyer-client relationship, we took  steps to secure and protect our client&#8217;s personal and financial information by  securing our Website with Secure Socket Layer (SSL) Certificate. It secures  communication between our client and E-Lawyers Online using server and client  authentication with encryption algorithm and cryptographic keys. Rest assured  that all personal and financial information of E-Lawyers Online&#8217;s client are  secured and protected. Internet users associate SSL with the padlock that  appears in your browser when you enter the secure area of a website. Look for this padlock sign before entering any personal or financial information online.</p>
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