@extends('layouts.admin')
@section('title')
  E-Lawyers Online - Users (Admin)
@endsection
@section('top-scripts')

@endsection
@section('content')
@section('top-title-and-breadcrubs')
  <section class="content-header">
    <h1>
      Users
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
@endsection
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Users</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="users" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Type</th>
              <th>Address</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->personalInfo->first_name.' '.$user->personalInfo->last_name }}</td>
                <td>{{ $user->type }}</td>
                <td>{{ $user->personalInfo->address_ph }}</td>
                <td>{{ $user->personalInfo->gender }}</td>
                <td>
                	<a href="#" class="btn btn-sm btn-default">View</a>
                </td>
              </tr>
              @endforeach
             </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
@section('bottom-scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#users').DataTable();
    });
  </script>
@endsection