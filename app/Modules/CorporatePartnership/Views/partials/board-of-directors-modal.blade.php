<div class="modal fade" id="board-of-directors-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" id="board-of-directors-form">
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name"> Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="nationality"> Nationality</label>
            <input class="form-control" type="text" name="nationality" placeholder="Nationality">
          </div>
          <div class="form-group">
            <label for="address"> Address</label>
            <input class="form-control" type="text" name="address" placeholder="Address">
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