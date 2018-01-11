@extends('app')
@section('title')
  E-Lawyers Online - Legal Cases
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>My Legal Cases</strong>
          </h3>
          <table class="table table-striped table-hover table-bordered margin-top-30">
            <thead class="table-info">
              <tr>
                <th>ID</th>
                <th>Legal Service</th>
                <th>Status</th>
                <th>Date</th>
                <th>Payment Option</th>
                <th>Payment Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($legalCases as $legalCase)
                <tr>
                  <td>{{ $legalCase->id }}</td>
                  <td>{{ $legalCase->legalCaseDetail->legal_service }}</td>
                  <td>{{ $legalCase->legalCaseDetail->status }}</td>
                  <td>{{ $legalCase->created_at->format('F d, Y h:i A') }}</td>
                  <td>N/A</td>
                  <td>{{ $legalCase->payment->status }}</td>
                  <td>
                    <button type="button" class="btn btn-info">View</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(){

    });
  </script>
@endsection