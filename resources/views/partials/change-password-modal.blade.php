<div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="change-password" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="password" class="control-label">Old Password</label>
            <input id="old-password" type="password" class="form-control" name="old-password" placeholder="Old Password">
            <div class="form-control-feedback text-danger d-none">* required</div>
          </div>
          <div class="form-group">
            <label for="password" class="control-label">New Password</label>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            <div class="form-control-feedback text-danger d-none">* required</div>
          </div>
          <div class="form-group">
            <label for="password-confirm" class="control-label">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirm">
            <div class="form-control-feedback text-danger d-none">* required</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>