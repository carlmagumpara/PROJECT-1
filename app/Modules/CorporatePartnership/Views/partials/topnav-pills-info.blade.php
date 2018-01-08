@php
  function isCurrentPageTopNavPills($routeName, $type) {
    return Route::current()->getName() == $routeName ? 'active' : '';
  }
@endphp
<div class="text-center margin-bottom-30 margin-top-30">
  <ul class="nav nav-pills ">
    <li class="nav-item">
      <a class="nav-link {{isCurrentPageTopNavPills('corporate-partnership.corporate-partnership-representative-information.index','class')}}" href="{{ route('corporate-partnership.corporate-partnership-representative-information.index') }}">
        Representative Information
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{isCurrentPageTopNavPills('corporate-partnership.corporate-partnership-information.index','class')}}" href="{{ route('corporate-partnership.corporate-partnership-information.index') }}">
        Corporate/Partnership Information
      </a>
    </li>
  </ul>
</div>