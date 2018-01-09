<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered margin-top-30">
    <thead class="table-info">
      <tr>
        <th>Name</th>
        <th>Nationality</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($boardOfDirectors as $board)
        <tr>
          <td>{{ $board->name }}</td>
          <td>{{ $board->nationality }}</td>
          <td>{{ $board->address }}</td>
          <td>
            <div class="pull-right">
              <button role="button" type="button" class="btn btn-danger btn-sm delete-child" data-delete="{{ route('corporate-partnership.board-of-directors.delete', $board->id) }}">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
              <button data-table-type="Board" role="button" type="button" data-toggle="modal" data-target="#board-of-directors-modal" class="btn btn-info btn-sm" data-type="edit" data-action="{{ route('corporate-partnership.board-of-directors.update', $board->id) }}" data-fetch="{{ route('corporate-partnership.board-of-directors.fetch-board-info', $board->id) }}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>