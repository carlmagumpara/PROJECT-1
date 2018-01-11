@extends('app')
@section('title')
  E-Lawyers Online - Client's Letter Of Intent
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Client's Letter Of Intent</strong>
          </h3>
          @if ($legalCaseDetails->legalService->name == 'Per Query')
            <p>
              {{ $legalCaseDetails->created_at->format('F d, Y') }}
            </p>
            <p>
              I, {{ Auth::user()->personalInfo->first_name.' '.Auth::user()->personalInfo->last_name }}, with registered e-mail address of {{ Auth::user()->email }}, of legal age, hereby intends to obtain from E-Lawyers Online your service of online legal consultation via E-Mail or Written Query.
            </p>
            <p>
              I agree to pay the amount of  &#8369; {{ $legalCaseDetails->legalService->fee }}.00 as professional fee. I undertake to pay the same within two (2) days from submission of this letter of intent and I understand that my failure to pay within the said period shall entitle E-Lawyers Online to defer the review of my case and/or defer sending the written answer to my query/ies. I expressly acknowledge that the said fee is for the full payment for the subject matter of my query and to no other, and in case I failed to complete the facts or documents as requested, the partial written answer to my query/ies shall be considered as full performance of E-Lawyers Online’s obligation and the fees thereof forfeited in favor of E-Lawyers Online. For this purpose, I am providing you my personal information, the summary of the facts of my legal problem including documents (if any), my objective, my questions and my acceptance of your Online Legal Consultation Agreement.
            </p>
            <p>
              Respectfully submitted.
            </p>
            <a href="{{ route('legal-services.legal-cases.legal-problem', $legalCaseDetails->legal_case_id) }}" class="btn btn-primary">
              SUBMIT 
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

    });
  </script>
@endsection