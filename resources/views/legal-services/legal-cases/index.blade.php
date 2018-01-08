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
          <h2 class="margin-bottom-20">
            <strong>My Legal Cases</strong>
          </h2>

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
                  <td>{{ $legalCase->created_at }}</td>
                  <td></td>
                  <td></td>
                  <td></td>
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