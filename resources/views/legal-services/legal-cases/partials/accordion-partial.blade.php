<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a class="text-dark no-underline" data-toggle="collapse" href="#legal-problem" role="button" aria-expanded="true" aria-controls="legal-problem">
          My Legal Problem is - Ang Problema kong Legal ay:
        </a>
      </h5>
    </div>
    <div id="legal-problem" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        @include('legal-services.legal-cases.partials.legal-problem-form-partial')
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed text-dark no-underline" data-toggle="collapse" href="#summary-of-facts" role="button" aria-expanded="false" aria-controls="summary-of-facts">
          Summary Of Facts
        </a>
      </h5>
    </div>
    <div id="summary-of-facts" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        @include('legal-services.legal-cases.partials.summary-of-facts-form-partial')
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed text-dark no-underline" data-toggle="collapse" href="#objectives-and-questions" role="button" aria-expanded="false" aria-controls="objectives-and-questions">
          Objectives And Questions
        </a>
      </h5>
    </div>
    <div id="objectives-and-questions" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        @include('legal-services.legal-cases.partials.objectives-and-questions-form-partial')
      </div>
    </div>
  </div>
</div>