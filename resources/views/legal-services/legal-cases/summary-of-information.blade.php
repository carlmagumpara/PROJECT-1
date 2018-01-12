@extends('app')
@section('title')
  E-Lawyers Online - Summary Of Information
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card margin-bottom-20">
        <div class="card-body">
          <h3 class="margin-bottom-20">
            <strong>Summary Of Information</strong>
          </h3>
          <table>
            <tr>
              <td class="w-30 p-2">My Legal Problem is</td>
              <td>{{ $legalCaseDetails->legalCase->legal_problem }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">Case Detail Id</td>
              <td>{{ $legalCaseDetails->id }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">Summary of Facts</td>
              <td>{{ $legalCaseDetails->summary }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">My Objectives</td>
              <td>{{ $legalCaseDetails->objectives }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">My Questions</td>
              <td>{{ $legalCaseDetails->questions }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">Status</td>
              <td>{{ $legalCaseDetails->status }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">Date Created</td>
              <td>{{ $legalCaseDetails->legalCase->created_at->format('F d, Y') }}</td>
            </tr>
            <tr>
              <td class="w-25 p-2">Professional Fee</td>
              <td>&#8369;{{ $legalCaseDetails->legalService->fee }}.00</td>
            </tr>
          </table>
          <div class="margin-bottom-30 margin-top-30">
            @if ($legalCaseDetails->legalService->name == 'Per Query')
              <a href="{{ route('legal-services.legal-cases.per-query', $legalCaseDetails->legal_case_id) }}" class="btn btn-secondary margin-left-5 margin-right-5">
                BACK
              </a>
            @endif
            <button type="submit" class="btn btn-primary margin-left-5 margin-right-5">
              NEXT
            </button>
          </div>
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