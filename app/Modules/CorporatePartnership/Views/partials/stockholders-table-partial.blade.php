<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered margin-top-30">
    <thead class="table-info">
      <tr>
        <th>Name</th>
        <th>Nationality</th>
        <th>No. Of Share/Contibution</th>
        <th>Subscribed Capital</th>
        <th>Paid-up Capital</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($stockholders as $stockholder)
        <tr>
          <td>{{ $stockholder->name }}</td>
          <td>{{ $stockholder->nationality }}</td>
          <td>{{ $stockholder->no_of_share }}</td>
          <td>{{ $stockholder->subscribed_capital }}</td>
          <td>{{ $stockholder->paid_up_capital }}</td>
          <td>
            <div class="pull-right">
              <button role="button" type="button" class="btn btn-danger btn-sm delete-child" data-delete="{{ route('corporate-partnership.stockholders.delete', $stockholder->id) }}">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
              <button data-table-type="Stockholder" role="button" type="button" data-toggle="modal" data-target="#stockholders-modal" class="btn btn-info btn-sm" data-type="edit" data-action="{{ route('corporate-partnership.stockholders.update', $stockholder->id) }}" data-fetch="{{ route('corporate-partnership.stockholders.fetch-stockholder-info', $stockholder->id) }}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>