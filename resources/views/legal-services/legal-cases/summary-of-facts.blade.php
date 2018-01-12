@extends('app')
@section('title')
  E-Lawyers Online - Summary Of Facts
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Summary Of Facts</strong>
          </h3>
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
              <a href="{{ route('legal-services.legal-cases.legal-problem', $legalCaseDetails->legal_case_id) }}" class="btn btn-secondary margin-left-5 margin-right-5">
                BACK
              </a>
              <button type="submit" class="btn btn-primary margin-left-5 margin-right-5">
                NEXT
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

      $('#summary-of-facts-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
            window.location = '{{ route("legal-services.legal-cases.objectives-and-questions", $legalCaseDetails->legal_case_id ) }}';
          } else {
            $.notify({
              title: 'Error',
              message: data.message
            },{
              allow_dismiss: true,
              type: 'danger',
              delay: 3000,
              newest_on_top: true,
              placement: {
                from: 'top',
                align: 'right'
              }
            });
          }
          button.text('NEXT').removeClass('disabled');
          $('#loader').addClass('d-none');
        }).fail(function(error){
          if(error.readyState == 4) {
            var errors = [];
            $.each(error.responseJSON,function(key,value){
              $.each(value,function(key,val) {
                errors += '<li>'+val+'</li>';
              });
            });
            $.notify({
              title: 'Error',
              message: '<ul>'+errors+'</ul>'
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
            button.text('NEXT').removeClass('disabled');
            $('#loader').addClass('d-none');
          }
        });
      });

    });
  </script>
@endsection