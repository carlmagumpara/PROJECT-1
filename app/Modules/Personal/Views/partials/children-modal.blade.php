<div class="modal fade" id="children-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" id="children-info-form">
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Child Name</label>
            <input class="form-control" type="text" name="name" placeholder="Child Name">
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" id="gender">
              <option value="">Select</option>
              @for ($i = 0; $i < count(config('enum.gender')); $i++)
              <option value="{{ config('enum.gender')[$i] }}">{{ config('enum.gender')[$i] }}</option> 
              @endfor
            </select>
          </div>
          <div class="form-group birth_date">
            <label for="birth_date">Birth Date</label>
            <div class="input-group date">
              <input type="text" class="form-control no-margin" name="birth_date" id="birth_date">
              <span class="input-group-addon">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="school">School</label>
            <input class="form-control" type="text" name="school" placeholder="School">
          </div>
          <div class="form-group">
            <label for="name">Grade Year</label>
            <input class="form-control" type="text" name="grade_year" placeholder="Grade Year">
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