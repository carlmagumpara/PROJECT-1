$(document).ready(function(){
  $('#login-form').submit(function(e){
    e.preventDefault();
    var button = $(this).find('[type=submit]');
    button.html('<i class="fa fa-spinner fa-spin"></i> PROCESSING...').addClass('disabled');
    $.post($(this).attr('action'), $(this).serializeArray() , function(data){
       console.log(data)
       if (!data.error) {
          $('#loader').removeClass('d-none');
          location.reload();
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