@extends('app')
@section('title')
  E-Lawyers Online - Corporate/Partnership Information
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @include('CorporatePartnership::partials.topnav-pills-info')
      <div class="card">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Corporate/Partnership Information</strong>
          </h3>
          <form action="{{ route('corporate-partnership.corporate-partnership-information.update') }}" method="post" id="corporate-partnership-info">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                <div class="margin-bottom-30 margin-top-30 text-center">
                  @for ($i = 0; $i < count(config('enum.corporate_partnership.type')); $i++)
                    <label class="custom-control custom-radio">
                      <input value="{{ config('enum.corporate_partnership.type')[$i] }}" name="type" type="radio" class="custom-control-input" {{ $corporatePartnershipInfo->type == config('enum.corporate_partnership.type')[$i] ?  'checked' : '' }}>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">{{config('enum.corporate_partnership.type')[$i]}}</span>
                    </label>
                  @endfor
                </div>
                <div class="form-group">
                  <label for="company_name" class="control-label">Corporate/Partnership Name</label>
                  <input type="text" class="form-control" name="company_name" value="{{ $corporatePartnershipInfo->company_name }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group">
                  <label for="principal_office_address" class="control-label">Principal Office Address</label>
                  <input type="text" class="form-control" name="principal_office_address" value="{{ $corporatePartnershipInfo->principal_office_address }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group">
                  <label for="business_address" class="control-label">Business Address</label>
                  <input type="text" class="form-control" name="business_address" value="{{ $corporatePartnershipInfo->business_address }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="form-group">
                  <label for="line_of_business" class="control-label">Line Address</label>
                  <input type="text" class="form-control" name="line_of_business" value="{{ $corporatePartnershipInfo->line_of_business }}">
                  <div class="form-control-feedback text-danger d-none">* required</div>
                </div>
                <div class="margin-bottom-30 margin-top-30 text-center" id="attach-fill-out">
                  @for ($i = 0; $i < count(config('enum.corporate_partnership.attach_fill_out')); $i++)
                    <label class="custom-control custom-radio">
                      <input value="{{ config('enum.corporate_partnership.attach_fill_out')[$i]['type'] }}" name="attach_fill_out" type="radio" class="custom-control-input" data-name="{{ config('enum.corporate_partnership.attach_fill_out')[$i]['name'] }}" {{ $corporatePartnershipInfo->attach_fill_out == config('enum.corporate_partnership.attach_fill_out')[$i]['type'] ?  'checked' : '' }}>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">{{config('enum.corporate_partnership.attach_fill_out')[$i]['label']}}</span>
                    </label>
                  @endfor
                </div>
                <ul class="nav nav-tabs d-none" id="attach-fill-out-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link {{ $corporatePartnershipInfo->attach_fill_out ==  'Attach'?  'active' : '' }}" data-toggle="tab" href="#attach">
                      Attach
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ $corporatePartnershipInfo->attach_fill_out ==  'Fill Out'?  'active' : '' }}" data-toggle="tab" href="#fill_out">
                      Fill Out
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade in show card border-0 {{ $corporatePartnershipInfo->attach_fill_out ==  'Attach'?  'active' : '' }}" id="attach">
                    <div class="card-body">
                      <p>
                        The following documents are required, otherwise you can fillout the forms.
                      </p>
                      <ul>
                        <li>Scanned Articles of Incorporation and By-Laws</li>
                        <li>Articles of Partnership</li>
                        <li>Updated SEC General Information Sheet</li>
                      </ul>
                      <h4 class="text-center">DROPZONE HERE</h4>
                    </div>
                  </div>
                  <div class="tab-pane fade in show card border-0 {{ $corporatePartnershipInfo->attach_fill_out ==  'Fill Out'?  'active' : '' }}" id="fill_out">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="authorized_capital_stock_partnership_capital" class="control-label">Authorized Capital Stock/Partnership Capital</label>
                            <input type="text" class="form-control" name="authorized_capital_stock_partnership_capital" value="{{ $corporatePartnershipInfo->authorized_capital_stock_partnership_capital }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="no_of_shares" class="control-label">No. of Share</label>
                            <input type="number" class="form-control" name="no_of_shares" value="{{ $corporatePartnershipInfo->no_of_shares }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="par_value" class="control-label">Par Value</label>
                            <input type="number" class="form-control" name="par_value" value="{{ $corporatePartnershipInfo->par_value }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="no_of_shares_subscribed" class="control-label">No. of Share/s Subcribed</label>
                            <input type="number" class="form-control" name="no_of_shares_subscribed" value="{{ $corporatePartnershipInfo->no_of_shares_subscribed }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="subscribed_capital" class="control-label">Subcribed Capital</label>
                            <input type="number" class="form-control" name="subscribed_capital" value="{{ $corporatePartnershipInfo->subscribed_capital }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="paid_up_capital" class="control-label">Paid Up Capital</label>
                            <input type="text" class="form-control" name="paid_up_capital" value="{{ $corporatePartnershipInfo->paid_up_capital }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fiscal_calendar_year" class="control-label">Fiscal/Calendar Year</label>
                            <input type="text" class="form-control" name="fiscal_calendar_year" value="{{ $corporatePartnershipInfo->fiscal_calendar_year }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="annual_meeting" class="control-label">Annual Meeting</label>
                            <input type="text" class="form-control" name="annual_meeting" value="{{ $corporatePartnershipInfo->annual_meeting }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="president" class="control-label">President</label>
                            <input type="text" class="form-control" name="president" value="{{ $corporatePartnershipInfo->president }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="treasurer" class="control-label">Treasurer</label>
                            <input type="text" class="form-control" name="treasurer" value="{{ $corporatePartnershipInfo->treasurer }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="secretary" class="control-label">Secretary</label>
                            <input type="text" class="form-control" name="secretary" value="{{ $corporatePartnershipInfo->secretary }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="general_manager" class="control-label">General Manager</label>
                            <input type="text" class="form-control" name="general_manager" value="{{ $corporatePartnershipInfo->general_manager }}">
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="managing_partners" class="control-label">General Manager</label>
                            <textarea class="form-control" name="managing_partners">{{ $corporatePartnershipInfo->managing_partners }}</textarea> 
                            <div class="form-control-feedback text-danger d-none">* required</div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center margin-top-30">
                        <h4>Board of Directors/Trustees/Partners</h4>
                      </div>
                      <div class="margin-bottom-30 margin-top-30">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#board-of-directors-modal" data-type="add" data-action="{{ route('corporate-partnership.board-of-directors.add') }}">
                          Add
                        </button>
                      </div>
                      <div data-render="{{ route('corporate-partnership.board-of-directors.render') }}" id="board-of-directors-table">
                        @include('CorporatePartnership::partials.board-of-directors-table-partial')
                      </div>
                      <div class="margin-bottom-30 margin-top-30 text-center">
                        @for ($i = 0; $i < count(config('enum.corporate_partnership.stockholder_type')); $i++)
                          <label class="custom-control custom-radio">
                            <input value="{{ config('enum.corporate_partnership.stockholder_type')[$i] }}" name="stockholder_type" type="radio" class="custom-control-input" {{ $corporatePartnershipInfo->stockholder_type == config('enum.corporate_partnership.stockholder_type')[$i] ?  'checked' : '' }}>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">{{config('enum.corporate_partnership.stockholder_type')[$i]}}</span>
                          </label>
                        @endfor
                      </div>
                      <div class="text-center margin-top-30">
                        <h4>Stockholders/Trustees/Partners</h4>
                      </div>

                    </div>
                  </div>
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
@include('CorporatePartnership::partials.board-of-directors-modal')
@include('CorporatePartnership::partials.delete-modal')
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('click', '.delete-child', function(e){
      e.preventDefault();
      var data_delete = $(this).attr('data-delete');
      $('#delete-modal').modal('show');
      $('#btn-delete-yes').attr('data-delete', data_delete);
    });

    $('#btn-delete-yes').click(function(e){
      e.preventDefault();
      $('#loader').removeClass('d-none');
      $.post($(this).attr('data-delete'), { _token: window.Laravel['csrfToken'] } , function(data){
        var data = JSON.parse(data);
        if (data.result == 'success') {
          $('#delete-modal').modal('hide');
          $('#btn-delete-yes').removeAttr('data-delete');
          $.notify({
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
          refreshBoardOfDirectorsTable();
          $('#loader').addClass('d-none');
        } 
      });
    });

    $('#board-of-directors-form').submit(function(e){
      e.preventDefault();
      var button = $(this).find('[type=submit]');
      button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
      $('#loader').removeClass('d-none');
      $.post($(this).attr('action'), $(this).serializeArray() , function(data){
        var data = JSON.parse(data);
        if (data.result == 'success') {
          $('#board-of-directors-modal').modal('hide');
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
          refreshBoardOfDirectorsTable();
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

    $('#board-of-directors-modal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var type = button.data('type');
      var modal = $(this);
      if (type == 'add') {
        modal.find('.modal-title').text('Add');
        modal.find('#board-of-directors-form').attr('action', button.data('action'));
      } else {
        $('#loader').removeClass('d-none');
        modal.find('.modal-title').text('Edit');
        modal.find('#board-of-directors-form').attr('action', button.data('action'));
        $.get(button.data('fetch'), function(data){
          $.each(data, function(key, val){
            modal.find('[name='+key+']').val(val);
          });
          $('#loader').addClass('d-none');
        });
      }
    });

    $('#attach-fill-out [type=radio]').each(function(k, v){
      $(v).click(function(e){
        $('#attach-fill-out-tab a[href="#'+$(this).attr('data-name')+'"]').tab('show');
      })
    });

    $('#corporate-partnership-info').submit(function(e){
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
              align: 'right'
            }
          });
          button.text('SUBMIT').removeClass('disabled');
          $('#loader').addClass('d-none');
        }
      });
    });

    function refreshBoardOfDirectorsTable() {
      var board_of_directors_table = $('#board-of-directors-table');
      $.get(board_of_directors_table.attr('data-render'), function(data){
        board_of_directors_table.html(data);
      });
    }

  });
</script>
@endsection