@php
  function isCurrentPageTopNavPills($routeName, $type) {
    return Route::current()->getName() == $routeName ? 'active' : '';
  }
@endphp
<div class="text-center margin-bottom-30 margin-top-30">
  <ul class="nav nav-pills ">
    <li class="nav-item">
      <a class="nav-link {{isCurrentPageTopNavPills('personal.personal-information.index','class')}}" href="{{ route('personal.personal-information.index') }}">Personal Information</a>
    </li>
    @if(Auth::user()->personalInfo->civil_status == 'Married')
      <li class="nav-item">
        <a class="nav-link {{isCurrentPageTopNavPills('personal.spouse-information.index','class')}}" href="{{ route('personal.spouse-information.index') }}">Spouse Information</a>
      </li>
    @endif
    <li class="nav-item">
      <a class="nav-link {{isCurrentPageTopNavPills('personal.children-information.index','class')}}" href="{{ route('personal.children-information.index') }}">Children Information</a>
    </li>
  </ul>
</div>