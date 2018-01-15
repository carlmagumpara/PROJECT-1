@php
  function isCurrentPageMainNav($routeName) {
    return Route::current()->getName() == $routeName ? 'active' : '';
  }
@endphp
<div class="fixed-top" id="nav-position-control">
  <div class="bg-white margin-bottom-20" id="main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light padding-0">
        <a class="navbar-brand" href="{{ route('app.index') }}">
          <img src="{{ asset('img/logo.png') }}" class="small-logo" alt="e-lawyers online logo">
          <span class="text-logo"></span>
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
            @if (Auth::check())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SETTING
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if (Auth::user()->type == 'Personal')
                  <a class="dropdown-item" href="{{ route('personal.personal-information.index') }}">
                  <i class="fa fa-user"></i> {{ Auth::user()->personalInfo->first_name.' '.Auth::user()->personalInfo->last_name }}
                  </a>
                @else
                  <a class="dropdown-item" href="{{ route('corporate-partnership.corporate-partnership-representative-information.index') }}">
                    <i class="fa fa-user"></i> {{ Auth::user()->personalInfo->first_name.' '.Auth::user()->personalInfo->last_name }}
                  </a>
                @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('legal-services.legal-cases.index') }}">My Legal Cases</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change-password">Change Password</a>
                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-top').submit();">Logout</a>
                <form id="logout-form-top" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
            @endif
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