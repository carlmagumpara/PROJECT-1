<form id="objectives-and-questions-form" action="{{ route('legal-services.legal-cases.objectives-and-questions.post', $legalCaseDetails->legal_case_id) }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="objectives" class="control-label">My Objectives/Ang Mga Gusto ko:</label>
    <textarea id="objectives" type="text" class="form-control" name="objectives" rows="8">{{ $legalCaseDetails->objectives }}</textarea>
    <div class="form-control-feedback text-danger d-none">* required</div>
  </div>
  <small>
    *You can prepare your summary of facts in Microsoft Word then copy and paste in this text area.
  </small>
  <div class="form-group margin-top-30">
    <label for="questions" class="control-label">My Questions/Ang (mga) Tanong ko:</label>
    <textarea id="questions" type="text" class="form-control" name="questions" rows="8">{{ $legalCaseDetails->questions }}</textarea>
    <div class="form-control-feedback text-danger d-none">* required</div>
  </div>
  <small>
    *You can prepare your summary of facts in Microsoft Word then copy and paste in this text area.
  </small>
  <div class="margin-bottom-30 margin-top-30">
    <a href="#" id="objectives-and-questions-back" class="btn btn-secondary margin-left-5 margin-right-5">
      BACK
    </a>
    <button type="submit" class="btn btn-primary margin-left-5 margin-right-5">
      NEXT
    </button>
  </div>
</form>