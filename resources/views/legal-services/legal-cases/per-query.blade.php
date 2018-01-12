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
          <div id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                  <a data-toggle="collapse" href="#legal-problem" role="button" aria-expanded="true" aria-controls="legal-problem">
                    My Legal Problem is - Ang Problema kong Legal ay:
                  </a>
                </h5>
              </div>
              <div id="legal-problem" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  @include('legal-services.legal-cases.legal-problem')
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#summary-of-facts" role="button" aria-expanded="false" aria-controls="summary-of-facts">
                    Summary Of Facts
                  </a>
                </h5>
              </div>
              <div id="summary-of-facts" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  @include('legal-services.legal-cases.summary-of-facts')
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" href="#objectives-and-questions" role="button" aria-expanded="false" aria-controls="objectives-and-questions">
                    Objectives And Questions
                  </a>
                </h5>
              </div>
              <div id="objectives-and-questions" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  @include('legal-services.legal-cases.objectives-and-questions')
                </div>
              </div>
            </div>
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

      $('#legal-problem-form').submit(function(e){
        e.preventDefault();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'success') {
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

      // $('#accordion').on('show.bs.collapse', function (e) {
      //   console.log(e.target)
      //   e.preventDefault();
      // });

      // $('#accordion').on('hide.bs.collapse', function (e) {
      //   console.log(e.target)
      //   e.preventDefault();
      // });

    });
  </script>
@endsection