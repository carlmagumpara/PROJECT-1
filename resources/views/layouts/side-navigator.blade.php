@php
  function isCurrentPageSideNav($routeName) {
    return Route::current()->getName() == $routeName ? 'active-nav' : '';
  }
@endphp
<div id="accordion" role="tablist" class="margin-bottom-20">
  <div class="card margin-bottom-20">
    <div class="card-header bg-transparent" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fa fa-laptop" aria-hidden="true"></i> OUR ONLINE LEGAL SERVICES
        </a>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body padding-0">
        <div class="list-group side-menu">
          <a href="{{ route('legal-services.initial-legal-assessment.index') }}" class="border-0 rounded-0 list-group-item list-group-item-action {{isCurrentPageSideNav('legal-services.initial-legal-assessment.index')}}">
            INNITIAL LEGAL ASSESSMENT
          </a>
          <a href="{{ route('legal-services.index') }}#per-query" class="border-0 list-group-item list-group-item-action" >LEGAL ADVICE BY E-MAIL</a>
          <a href="{{ route('legal-services.index') }}#video-conference" class="border-0 list-group-item list-group-item-action">VIDEO CONFERENCE W/ A LAWYER</a>
          <a href="{{ route('legal-services.index') }}#office-conference" class="border-0 list-group-item list-group-item-action">OFFICE CONFERENCE W/ A LAWYER</a>
          <a href="{{ route('legal-services.index') }}#monthly-retainer" class="border-0 list-group-item list-group-item-action">MONTHLY RETAINER</a>
          <a href="{{ route('legal-services.index') }}#case-project-retainer" class="border-0 rounded-0 list-group-item list-group-item-action">PER CASE/PROJECT RETAINER</a>
        </div>
      </div>
    </div>
  </div>
</div>
@include('ads.small')
@include('ads.small')