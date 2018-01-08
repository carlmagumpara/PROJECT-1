<div class="card margin-bottom-20">
  <div class="card-body">
    <p class="lead text-center">
      @if (Auth::user()->type == 'Personal')
      <a class="text-dark" href="{{ route('personal.personal-information.index') }}">Hi! {{ Auth::user()->personalInfo->first_name }}</a>
      @else
      <a class="text-dark" href="{{ route('corporate-partnership.corporate-partnership-representative-information.index') }}">Hi! {{ Auth::user()->personalInfo->first_name }}</a>
      @endif
      <br>
      <small>
        @if (Auth::user()->type == 'Personal')
          Personal Account
        @else
          Corporate/Partnership Account
        @endif
      </small>
    </p>
    <a href="{{ route('legal-services.legal-cases.index') }}" role="button" class="btn bg-secondary text-light btn-block"> MY LEGAL CASES </a>
    <a href="{{ url('/logout') }}" role="button" class="btn btn-danger btn-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> LOGOUT </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
	</div>
</div>