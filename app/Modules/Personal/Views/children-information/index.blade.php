@extends('app')
@section('title')
  E-Lawyers Online - Children Information
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @include('Personal::partials.topnav-pills-info')
      <div class="card">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Children Information</strong>
          </h3>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="custody">Custody of Children</label>
                <select class="form-control" name="custody" id="custody">
                  <option value="">Select</option>
                  @for ($i = 0; $i < count(config('enum.custody')); $i++)
                  <option value="{{ config('enum.custody')[$i] }}" {{ Auth::user()->childrenInfo->first()->custody ==  config('enum.custody')[$i] ? 'selected' : ''}}>{{ config('enum.custody')[$i] }}</option>
                  @endfor
                </select>
              </div>
            </div>
            <div class="col-md-9">
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#children-modal" data-type="add" data-action="{{ route('personal.children-information.add') }}">
                Add Child
              </button>
            </div>
          </div>
          <div id="children-information-table" data-render="{{ route('personal.children-information.table.render') }}">
            @include('Personal::partials.children-table-partial')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('Personal::partials.children-modal')
@include('Personal::partials.delete-modal')
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
          refreshTable();
          $('#loader').addClass('d-none');
        } 
      });
    });

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

    $('#custody').change(function(e){
      var data = {
        _token:  window.Laravel['csrfToken'],
        custody: $(this).val()
      };
      $.post('{{ route("personal.children-information.update-list") }}', data, function(data){
        console.log(data)
      });
    });

    $('#children-info-form').submit(function(e){
      e.preventDefault();
      var button = $(this).find('[type=submit]');
      button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
      $('#loader').removeClass('d-none');
      $.post($(this).attr('action'), $(this).serializeArray() , function(data){
        var data = JSON.parse(data);
        if (data.result == 'success') {
          $('#children-modal').modal('hide');
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
          refreshTable();
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

    $('#children-modal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var type = button.data('type');
      var modal = $(this);
      if (type == 'add') {
        modal.find('.modal-title').text('Add Child Information');
        modal.find('#children-info-form').attr('action', button.data('action'));
      } else {
        $('#loader').removeClass('d-none');
        modal.find('.modal-title').text('Edit Child Information');
        modal.find('#children-info-form').attr('action', button.data('action'));
        $.get(button.data('fetch'), function(data){
          $.each(data, function(key, val){
            modal.find('[name='+key+']').val(val);
          });
          $('#loader').addClass('d-none');
        });
      }
    });

    $('#children-modal').on('hide.bs.modal', function (event) {
      var modal = $(this);
      modal.find('input[type=reset]').click();
      $('#children-info-alert').empty();
    });

    function refreshTable() {
      var children_information_table = $('#children-information-table');
      $.get(children_information_table.attr('data-render'), function(data){
        children_information_table.html(data);
      });
    }

  });
</script>
@endsection