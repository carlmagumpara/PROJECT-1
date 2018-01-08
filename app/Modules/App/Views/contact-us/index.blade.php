@extends('app')
@section('title')
  E-Lawyers Online - Contact Us
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h2 class="margin-bottom-20">
            <strong>Contact Us</strong>
          </h2>
          <img src="{{ asset('img/vlo.jpg') }}" class="img-fluid margin-bottom-20" />
          <table class="table table-sm">
            <tbody>
              <tr>
                <td width="170"><i class="fa fa-building-o" aria-hidden="true"></i> Main Office:</td>
                <td>Valderama Law Office, Unit 608 6th Floor AIC Empire Burgundy Tower Condominium Building, ADB Ave. Ortigas Center, 1605 Pasig City,&nbsp;Metro, Manila, Philippines</td>
              </tr>
              <tr>
                <td><i class="fa fa-phone" aria-hidden="true"></i> Telephone Number:</td>
              <td>
                <p>(632) 451-1594</p>
                <p(632) 727-2604 </p>
                <p>727-2604</p>
              </td>
              </tr>
              <tr>
                <td><i class="fa fa-fax" aria-hidden="true"></i> Fax Number:</td>
                <td>(632) 451-1594</td>
              </tr>
              <tr>
                <td><i class="fa fa-mobile" aria-hidden="true"></i> Mobile Numbers:</td>
                <td>(63) 9178981435 (Globe)<br /></td>
              </tr>
              <tr>
                <td><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail:</td>
                <td><a href="mailto:info@e-lawyersonline.com" target="_blank">info@e-lawyersonline.com</a> <br /> <a href="mailto:attyvalderama@e-lawyersonline.com" target="_blank">attyvalderama@e-lawyersonline.com</a></td>
              </tr>
            </tbody>
          </table>
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