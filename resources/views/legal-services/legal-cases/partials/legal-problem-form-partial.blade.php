<form id="legal-problem-form" action="{{ route('legal-services.legal-cases.legal-problem.post', $legalCaseDetails->legal_case_id) }}" method="post">
  {{ csrf_field() }}
  <div class="margin-bottom-30 margin-top-30">
    @foreach($legalProblemType as $legalProblem)
      <div>
        <label class="custom-control custom-radio">
          <input value="{{ $legalProblem->type }}" name="legal_problem" type="radio" class="custom-control-input" {{ $legalCaseDetails->legalCase->legal_problem == $legalProblem->type ? 'checked' : '' }}>
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">
            <strong>
              {{ $legalProblem->type }}
            </strong>
            - {{ $legalProblem->description }}
          </span>
        </label>
      </div>
    @endforeach
  </div>
  <div class="margin-bottom-30 margin-top-30">
    <button type="submit" class="btn btn-primary margin-left-5 margin-right-5">
      CONTINUE
    </button>
  </div>
</form>