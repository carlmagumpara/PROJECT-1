@extends('app')
@section('title')
  E-Lawyers Online - Objectives And Questions
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Objectives And Questions</strong>
          </h3>
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
              <a href="{{ route('legal-services.legal-cases.summary-of-facts', $legalCaseDetails->legal_case_id) }}" class="btn btn-secondary margin-left-5 margin-right-5">
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

      $('#objectives-and-questions-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
            window.location = '{{ route("legal-services.legal-cases.summary-of-information", $legalCaseDetails->legal_case_id) }}';
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