@extends('app')
@section('title')
  E-Lawyers Online - Per Query
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Per Query</strong>
          </h3>
          @include('legal-services.legal-cases.partials.accordion-partial')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

      var legal_problem = true;
      var summary_of_facts = false;
      var objectives_and_questions = false;

      $('#legal-problem-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
            summary_of_facts = true;
            legal_problem = false;
            objectives_and_questions = false;
            $('[aria-controls=summary-of-facts]').click();
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

      $('#summary-of-facts-back').click(function(){
        summary_of_facts = false;
        legal_problem = true;
        objectives_and_questions = false;
        $('[aria-controls=legal-problem]').click();
      });

      $('#summary-of-facts-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
            summary_of_facts = false;
            legal_problem = false;
            objectives_and_questions = true;
            $('[aria-controls=objectives-and-questions]').click();
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

      $('#objectives-and-questions-back').click(function(){
        summary_of_facts = true;
        legal_problem = false;
        objectives_and_questions = false;
        $('[aria-controls=summary-of-facts]').click();
      });

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

      $('#accordion').on('show.bs.collapse', function (e) {
        switch($(e.target).attr('id')) {
          case 'legal-problem':
            if (!legal_problem) {
              e.preventDefault();
            }
            break;
          case 'summary-of-facts':
            if (!summary_of_facts) {
              e.preventDefault();
            }
            break;
          case 'objectives-and-questions':
            if (!objectives_and_questions) {
              e.preventDefault();
            }
            break;
          default:
            e.preventDefault();
        }
      });

      $('#accordion').on('hide.bs.collapse', function (e) {
        switch($(e.target).attr('id')) {
          case 'legal-problem':
            if (legal_problem) {
              e.preventDefault();
            }
            break;
          case 'summary-of-facts':
            if (summary_of_facts) {
              e.preventDefault();
            }
            break;
          case 'objectives-and-questions':
            if (objectives_and_questions) {
              e.preventDefault();
            }
            break;
          default:
            e.preventDefault();
        }
      });

    });
  </script>
@endsection