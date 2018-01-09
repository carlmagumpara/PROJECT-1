<div class="modal fade" id="stockholders-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" id="stockholders-form">
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group">
            <label for="nationality">Nationality</label>
            <input class="form-control" type="text" name="nationality">
          </div>
          <div class="form-group">
            <label for="no_of_share">No. Of Share/Contibution</label>
            <input class="form-control" type="number" name="no_of_share">
          </div>
          <div class="form-group">
            <label for="subscribed_capital">Subscribed Capital</label>
            <input class="form-control" type="text" name="subscribed_capital">
          </div>
          <div class="form-group">
            <label for="paid_up_capital">Paid-up Capital</label>
            <input class="form-control" type="text" name="paid_up_capital">
          </div>
        </div>
        <div class="modal-footer">
          <input type="reset" class="invisible float-left">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-success">SAVE</button>
        </div>
      </form>
    </div>
  </div>
</div>