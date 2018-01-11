@extends('app')
@section('title')
  E-Lawyers Online - Legal Problem
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>My Legal Problem is - Ang Problema kong Legal ay:</strong>
          </h3>
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
            <div class="margin-bottom-30 margin-top-30 text-center">
              <button type="submit" class="btn btn-primary">
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

      $('#legal-problem-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
            $.notify({
              title: 'Success',
              message: data.message
            },{
              allow_dismiss: true,
              type: 'success',
              delay: 3000,
              newest_on_top: true,
              placement: {
                from: 'top',
                align: 'right'
              }
            });
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
          button.text('SAVE').removeClass('disabled');
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
            button.text('SUBMIT').removeClass('disabled');
            $('#loader').addClass('d-none');
          }
        });
      });

    });
  </script>
@endsection