$(document).ready(function(){
  $('#login-form').submit(function(e){
    e.preventDefault();
    var form = $(this);
    var button = $(this).find('[type=submit]');
    button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
    $.post(form.attr('action'), form.serializeArray() , function(data){
       if (!data.error) {
          $('#loader').removeClass('d-none');
          window.location = form.attr('data-url-intended');
       } else {
          $.notify({
            title: 'Error: ',
            message: data.error
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
       button.text('LOGIN').removeClass('disabled');
    }).fail(function(error){
        $.notify({
          title: 'Error: ',
          message: error
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
    });
  });
});