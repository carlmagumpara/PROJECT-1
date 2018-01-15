@extends('app')
@section('title')
  E-Lawyers Online - Online Legal Consultation Agreement
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Online Legal Consultation Agreement</strong>
          </h3>
          <p>I, {{ Auth::user()->personalInfo->first_name.' '.Auth::user()->personalInfo->last_name }}, of legal age, freely and voluntarily provided information to E-LAWYERS ONLINE with the intention to obtain legal advice for me or for the company/partnership I duly represents. I agree that:</p>
          <ol>
            <li>I will pay the amount of <strong>&#8369; {{ $legalCaseDetails->legalService->fee }}.00</strong> as professional fee. This fee for online legal consultation service shall cover only the subject matter discussed herein and to no other.</li>
            <li>I understand that the result of this consultation is for internal, personal and non-commercial purpose and I shall use the same not for any other purpose.</li>
            <li>Any and all information that will be given by me shall be treated as private and strictly confidential. I certify that all information given is true and correct and/or based on authentic documents.</li>
            <li>I expressly acknowledge that the legal advise obtained herein does not assure success of litigation as the same is based on the evidence presented and as appreciated by the courts of law;</li>
            <li>Legal advice given will be based on the facts narrated and documents sent by client and E-Lawyers Online reserves the right to defer legal advice if the facts/docs are incomplete. Failure to provide additional information/documents, initial legal advice shall be considered as final legal advice without right of reimbursement or refund of fees.</li>
            <li>E-Lawyers Online reserves the right to refuse to give legal advise by reason of conflict of interest or due to ethical professional consideration. In such a case, the fee shall be refunded to me;</li>
            <li>Legal advice shall be given via email upon confirmation of payment of prescribed fees. Legal fees inclusive of taxes;</li>
            <li>Legal advice shall not include preparation of contracts, pleadings, petitions, complaint or any papers and/or liaison work and/or court appearance and/or filing fees unless agreed otherwise in a separate retainer agreement and required additional fees has been paid and confirmed.</li>
            <li>Client shall fully cooperate with lawyer by providing needed information and documents.</li>
            <li>I agree that E-Lawyers Online shall have the right to first assess the scope of services based on the facts and documents submitted by me and to determine if the same is commensurate to the fees paid by me. E-Lawyers Online shall have the right to refund my fee in the event of disagreement of the parties upon determination that the fee is not proportionate to the legal services requested.</li>
            <li>The legal fee is for the full payment for the online consultation for the subject matter of my query/ies and any question/s I did not ask/provide in this website upon submission of this form shall be considered waived and forfeited. Follow-up questions or queries on other subject matter not covered by the fee may be entertained at the option of E-Lawyers Online on a discounted basis.</li>
          </ol>       
          <div class="margin-bottom-30 margin-top-30 text-center">
            <strong>
              I hereby
              <label class="custom-control custom-radio">
                <input value="agree" name="agreement" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">ACCEPT</span>
              </label>
              <label class="custom-control custom-radio">
                <input value="reject" name="agreement" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">REJECT</span>
              </label>
              the above said terms and conditions.
            </strong>
          </div>
          <div class="margin-bottom-30 margin-top-30">
            <button id="next-button" class="btn btn-primary margin-left-5 margin-right-5">
              NEXT
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

      $('#next-button').click(function(){
        var agreement = $('input[name=agreement]:checked').val();
        if (agreement) {
          if (agreement == 'agree') {
            window.location = "{{ route('legal-services.legal-cases.mode-of-payment', $legalCaseDetails->legal_case_id) }}";
          } else {
            $.notify({
              message: 'You must agree to continue.'
            },{
              z_index: 9999999,
              type: 'danger',
              delay: 3000,
              newest_on_top: true,
              placement: {
                from: 'top',
                align: 'right'
              }
            });
          }
        } else {
            $.notify({
              message: 'You must agree to continue.'
            },{
              z_index: 9999999,
              type: 'danger',
              delay: 3000,
              newest_on_top: true,
              placement: {
                from: 'top',
                align: 'right'
              }
            });
        }
      });

    });
  </script>
@endsection