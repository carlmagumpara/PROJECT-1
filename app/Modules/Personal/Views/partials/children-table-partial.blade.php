<table class="table table-striped table-hover table-bordered margin-top-30">
  <thead class="table-info">
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>Birth Date</th>
      <th>School</th>
      <th>Grade Year</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($childrenInfo as $child)
      <tr>
        <td>{{ $child->name }}</td>
        <td>{{ $child->gender }}</td>
        <td>{{ $child->birth_date }}</td>
        <td>{{ $child->school }}</td>
        <td>{{ $child->grade_year }}</td>
        <td>
          <div class="pull-right">
            <button role="button" class="btn btn-danger btn-sm delete-child" data-delete="{{ route('personal.children-information.delete', $child->id) }}">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
            <button role="button" data-toggle="modal" data-target="#children-modal" class="btn btn-info btn-sm" data-type="edit" data-action="{{ route('personal.children-information.update', $child->id) }}" data-fetch="{{ route('personal.children-information.fetch-child-info', $child->id) }}">
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>