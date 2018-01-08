@extends('app')
@section('title')
  E-Lawyers Online - Corporate/Partnership Representative Information
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @include('CorporatePartnership::partials.topnav-pills-info')
      <div class="card">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Corporate/Partnership Representative Information</strong>
          </h3>
          <form action="{{ route('corporate-partnership.corporate-partnership-representative-information.update') }}" method="POST" id="corporate-partnership-representative-info-form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="first_name" class="control-label">First Name</label>
                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $personalInfo->first_name }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="middle_name" class="control-label">Middle Name</label>
                  <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ $personalInfo->middle_name }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="last_name" class="control-label">Last Name</label>
                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $personalInfo->last_name }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="address_ph" class="control-label">Address (Philippines)</label>
                  <textarea rows="2" class="form-control" name="address_ph" id="address_ph">{{ $personalInfo->address_ph }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="address_abroad" class="control-label">Address (Abroad)</label>
                  <textarea rows="2" class="form-control" name="address_abroad" id="address_abroad">{{ $personalInfo->address_abroad }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="telephone_no" class="control-label">Telephone No</label>
                  <input id="telephone_no" type="text" class="form-control" name="telephone_no" value="{{ $personalInfo->telephone_no }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="cellphone_no" class="control-label">Cellphone No</label>
                  <input id="cellphone_no" type="text" class="form-control" name="cellphone_no" value="{{ $personalInfo->cellphone_no }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email" class="control-label">E-Mail</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ $personalInfo->email }}" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group birth_date">
                  <label for="birth_date">Birth Date</label>
                  <div class="input-group date">
                    <input type="text" class="form-control no-margin" name="birth_date" id="birth_date" value="{{ $personalInfo->birth_date }}">
                    <span class="input-group-addon">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="birth_place" class="control-label">Birth Place</label>
                  <input id="birth_place" type="text" class="form-control" name="birth_place" value="{{ $personalInfo->birth_place }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    @for ($i = 0; $i < count(config('enum.gender')); $i++)
                    <option value="{{ config('enum.gender')[$i] }}" {{ $personalInfo->gender ==  config('enum.gender')[$i] ? 'selected' : '' }}>{{ config('enum.gender')[$i] }}</option> 
                    @endfor
                  </select>
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="age" class="control-label">Age</label>
                  <input id="age" type="text" class="form-control" name="age" value="{{ $personalInfo->age }}" readonly>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="citizenship" class="control-label">Citizenship</label>
                  <input id="citizenship" type="text" class="form-control" name="citizenship" value="{{ $personalInfo->citizenship }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="education_attained">Education Attained</label>
                  <select class="form-control" name="education_attained" id="education_attained">
                    <option value="">Select</option>
                    @for ($i = 0; $i < count(config('enum.education_attained')); $i++)
                    <option value="{{ config('enum.education_attained')[$i] }}" {{ $personalInfo->education_attained ==  config('enum.education_attained')[$i] ? 'selected' : '' }}>{{ config('enum.education_attained')[$i] }}</option> 
                    @endfor
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="school" class="control-label">School</label>
                  <input id="school" type="text" class="form-control" name="school" value="{{ $personalInfo->school }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="company_work" class="control-label">Company/Work</label>
                  <input id="company_work" type="text" class="form-control" name="company_work" value="{{ $personalInfo->company_work }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nature_of_business" class="control-label">Nature of Business</label>
                  <input id="nature_of_business" type="text" class="form-control" name="nature_of_business" value="{{ $personalInfo->nature_of_business }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="company_address" class="control-label">Company Address</label>
                  <textarea rows="2" class="form-control" name="company_address" id="company_address">{{ $personalInfo->company_address }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="work_position" class="control-label">Work Position</label>
                  <input id="work_position" type="text" class="form-control" name="work_position" value="{{ $personalInfo->work_position }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="work_duration" class="control-label">Work Duration</label>
                  <input id="work_duration" type="text" class="form-control" name="work_duration" value="{{ $personalInfo->work_duration }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="work_status">Work Status</label>
                  <select class="form-control" name="work_status" id="work_status">
                    <option value="">Select</option>
                    @for ($i = 0; $i < count(config('enum.work_status')); $i++)
                    <option value="{{ config('enum.work_status')[$i] }}" {{ $personalInfo->work_status ==  config('enum.work_status')[$i] ? 'selected' : '' }}>{{ config('enum.work_status')[$i] }}</option> 
                    @endfor
                  </select>
                </div>
              </div>
            </div>
            <div class="clearfix">
              <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">
                  SUBMIT
                </button>
              </div>
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

    $('[name=first_name], [name=last_name], [name=gender]').focusout(function(){
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

    $('#corporate-partnership-representative-info-form').submit(function(e){
      e.preventDefault();
      var button = $(this).find('[type=submit]');
      button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
      $('#loader').removeClass('d-none');
      $.post($(this).attr('action'), $(this).serializeArray() , function(data){
        var data = JSON.parse(data);
        if (data.result == 'success') {
          window.location = "{{ route('corporate-partnership.corporate-partnership-information.index') }}";
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
              align: 'center'
            }
          });
        }
        button.text('SUBMIT').removeClass('disabled');
        $('#loader').addClass('d-none');
      }).fail(function(error){
        if(error.readyState == 4) {
          var errors = [];
          $.each(error.responseJSON,function(key,value) {
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
              align: 'center'
            }
          });
          button.text('SUBMIT').removeClass('disabled');
          $('#loader').addClass('d-none');
        }
      });
    });

    function calculateAge(birth_date) {
      var ageDifMs = Date.now() - birth_date.getTime();
      var ageDate = new Date(ageDifMs);
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    }

  });
</script>
@endsection