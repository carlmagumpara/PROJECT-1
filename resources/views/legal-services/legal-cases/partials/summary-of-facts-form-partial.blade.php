<form id="summary-of-facts-form" action="{{ route('legal-services.legal-cases.summary-of-facts.post', $legalCaseDetails->legal_case_id) }}" method="post">
  <p>
    Describe/Narrate from past to present the clear, complete and specific details/facts of your legal problem by answering the questions of WHO? WHY? WHEN? WHERE? WHAT? AND HOW? If you want to refer to any document, picture or video, you can scan and attach it in this form.
  </p>
  <p>
    Ikuwento nang malinaw, kumpleto at detalyadong pangyayari ang iyong problemang legal mula simula hanggang sa kasalukuyan sa pamamagitan ng pagsagot sa mga katanungang Sino? Bakit? Kailan? Saan? Ano? At Paano? Kung meron ka na papel, dokumento, larawan o video na kasama sa iyong katanungan, kopyahin at isama ito sa aplikasyon na ito.
  </p>
  {{ csrf_field() }}
  <div class="form-group">
    <label for="summary" class="control-label">Summary Of Facts</label>
    <textarea id="summary" type="text" class="form-control" name="summary" rows="8">{{ $legalCaseDetails->summary }}</textarea>
    <div class="form-control-feedback text-danger d-none">* required</div>
  </div>
  <small>
    *You can prepare your summary of facts in Microsoft Word then copy and paste in this text area.
  </small>
  <div class="margin-bottom-30 margin-top-30">
    <a href="#" id="summary-of-facts-back" class="btn btn-secondary margin-left-5 margin-right-5">
      BACK
    </a>
    <button type="submit" class="btn btn-primary margin-left-5 margin-right-5">
      NEXT
    </button>
  </div>
</form>