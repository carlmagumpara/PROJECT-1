@extends('app')
@section('title')
  E-Lawyers Online - Sign Up
@endsection
@section('content')
<div class="container min-height-100-vh">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div>
        <div class="text-center margin-top-30 margin-bottom-30">
          <a href="{{ route('app.index') }}">
            <img src="{{ asset('img/logo.png') }}" class="" alt="e-lawyers online logo">
          </a>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="margin-bottom-20">
              <strong>Sign up</strong>
            </h3>
            <div id="register-alert"></div>
            <form role="form" method="POST" action="{{ url('/register') }}" id="register-form">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="type">Please select type of account</label>
                  <select class="form-control" name="type" id="type">
                    <option value="">Select</option>
                    <option value="Personal">Personal</option>
                    <option value="Corporation">Corporation/Partnership</option>
                  </select>
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                  <label for="first_name" class="control-label">First Name</label>
                  <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                  <label for="last_name" class="control-label">Last Name</label>
                  <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="control-label">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                  <div class="form-control-feedback not-valid-email text-danger d-none">* not a valid e-mail</div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group">
                  <label for="password-confirm" class="control-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirm">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group birth_date">
                  <label for="birth_date">Birth Date</label>
                  <div class="input-group date">
                    <input type="text" class="form-control no-margin" name="birth_date" id="birth_date" placeholder="Birth Date">
                    <span class="input-group-addon">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <input type="hidden" name="age" id="age">
                <div class="form-group">
                  <label for="referred_by" class="control-label">Referred By</label>
                  <input id="referred_by" type="text" class="form-control" name="referred_by" placeholder="Referred By">
                </div>
                <div class="clearfix">
                  <input type="reset" class="invisible float-left">
                  <input type="checkbox"  name="end-user-agreement" class="invisible float-left">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">
                      REGISTER
                    </button>
                  </div>
                </div>
              <div class="text-center">
                <a class="btn btn-link" href="{{ url('/login') }}">
                  Already have an account? Click Here!
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials.end-user-agreement-modal')
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

      $('#birth_date').datetimepicker({ 
        format: 'YYYY-MM-DD',
        showTodayButton: true,
        viewMode: 'years',
        widgetPositioning: {
          horizontal: 'left',
          vertical: 'top'
        },
        icons: {
          next: 'fa fa-arrow-right',
          previous: 'fa fa-arrow-left'
        }
      });

      $('#birth_date').on('dp.change', function(e){ 
        $('[name=age]').val(calculateAge(new Date(e.date)));
      });

      $('#register-form').submit(function(e){
        e.preventDefault();
        $('#register-alert').empty();
        var button = $(this).find('[type=submit]');
        button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
        $('#loader').removeClass('d-none');
        $.post($(this).attr('action'), $(this).serializeArray() , function(data){
          var data = JSON.parse(data);
          if (data.result == 'show_agreement') {
            $('#enduserAgreementModal').modal('show');
          } else {
             window.location = "{{ route('auth.thank-you') }}";
            $('[type=reset]').click();
          }
          button.text('REGISTER').removeClass('disabled');
          $('#loader').addClass('d-none');
        }).fail(function(error){
            if(error.readyState == 4){
              var errors = [];
              $.each(error.responseJSON,function(key,value){
                $.each(value,function(key,val){
                  errors += '<li>'+val+'</li>';
                });
              });
              $.notify({
                title: 'Error',
                message: '<ul>'+errors+'</ul>'
              },{
                type: 'danger',
                delay: 3000,
                newest_on_top: true,
                placement: {
                  from: 'top',
                  align: 'right'
                }
              });
              button.text('REGISTER').removeClass('disabled');
              $('#loader').addClass('d-none');
            }
        });
      });

      $('#i-agree-button').click(function(){
        $('#enduserAgreementModal').modal('hide');
        $('[name=end-user-agreement]').prop('checked', true);
        $('#register-form').submit();
      });

      $('[name=type], [name=first_name], [name=last_name], #register-form [name=password], [name=password_confirmation], [name=gender]').focusout(function(){
        if ($(this).val() == '') {
          $(this).addClass('is-invalid');
          $(this).next('.form-control-feedback').removeClass('d-none');
        } else {
          $(this).removeClass('is-invalid');
          $(this).next('.form-control-feedback').addClass('d-none');
        }
      });

      $('[name=birth_date]').focusout(function(){
        if ($(this).val() == '') {
          $(this).addClass('is-invalid');
          $('.birth_date').find('.form-control-feedback').removeClass('d-none');
        } else {
          $(this).removeClass('is-invalid');
          $('.birth_date').find('.form-control-feedback').addClass('d-none');
        }
      });

      $('#register-form [name=email]').focusout(function(){
        if ($(this).val() == '') {
          $(this).addClass('is-invalid');
          $(this).next('.form-control-feedback').removeClass('d-none');
          $('#register-form').find('.form-control-feedback.not-valid-email').addClass('d-none');
        } else {
          $(this).next('.form-control-feedback').addClass('d-none');
          if (validateEmail($(this).val())) {
            $(this).removeClass('is-invalid');
            $('#register-form').find('.form-control-feedback.not-valid-email').addClass('d-none');
          } else {
            $(this).addClass('is-invalid');
            $('#register-form').find('.form-control-feedback.not-valid-email').removeClass('d-none');
          }
        }
      });

      function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }

      function calculateAge(birth_date) {
        var ageDifMs = Date.now() - birth_date.getTime();
        var ageDate = new Date(ageDifMs);
        return Math.abs(ageDate.getUTCFullYear() - 1970);
      }

    });
  </script>
@endsection