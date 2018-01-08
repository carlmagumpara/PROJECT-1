@php
  function isCurrentPageMainNav($routeName) {
    return Route::current()->getName() == $routeName ? 'active' : '';
  }
@endphp
<div class="postion-absolute-top" id="nav-position-control">
  <div id="small-top-nav">
    <div class="container">
      <nav class="nav justify-content-end text-light">
        <li class="nav-item">
          <a class="nav-link text-light" href="http://www.facebook.com/E.Lawyers.Online" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="http://twitter.com/#!/ELawyersOnline" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="http://www.linkedin.com/groups?gid=3995143&trk=hb_side_g" target="_blank">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link text-light" href="#">
            |
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->personalInfo->first_name.' '.Auth::user()->personalInfo->last_name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('legal-services.legal-cases.index') }}">My Legal Cases</a>
            @if (Auth::user()->type == 'Personal')
              <a class="dropdown-item" href="{{ route('personal.personal-information.index') }}">Profile</a>
            @else
              <a class="dropdown-item" href="{{ route('corporate-partnership.corporate-partnership-representative-information.index') }}">Profile</a>
            @endif
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change-password">Change Password</a>
            <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-top').submit();">Logout</a>
          </div>
          <form id="logout-form-top" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
        @endif
      </nav>
    </div>
  </div>
  <div class="bg-white margin-bottom-20" id="main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('app.index') }}">
          <img src="{{ asset('img/logo.png') }}" class="logo" alt="e-lawyers online logo">
          <span class="text-logo d-none"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{isCurrentPageMainNav('app.index')}}">
              <a class="nav-link" href="{{ route('app.index') }}">HOME</a>
            </li>
            <li class="nav-item {{isCurrentPageMainNav('app.about-us.index')}}">
              <a class="nav-link" href="{{ route('app.about-us.index') }}">ABOUT US</a>
            </li>
            <li class="nav-item {{isCurrentPageMainNav('app.you-and-the-law.index')}}">
              <a class="nav-link" href="{{ route('app.you-and-the-law.index') }}">YOU & THE LAW</a>
            </li>
            <li class="nav-item {{isCurrentPageMainNav('app.law-and-society.index')}}">
              <a class="nav-link" href="{{ route('app.law-and-society.index') }}">LAW & SOCIETY</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LAW UPDATES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('app.e-legal-news.index') }}">E-LEGAL NEWS</a>
                <a class="dropdown-item" href="{{ route('app.case-studies.index') }}">CASE STUDIES</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-info text-light margin-left-10" href="{{ route('legal-services.legal-cases.online-legal-consultation') }}" id="submit-legal-query">
                <i class="fa fa-gavel"></i> SUBMIT LEGAL QUERY
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>