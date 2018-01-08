@extends('layouts.admin')
@section('title')
  E-Lawyers Online - Post/Show (Admin)
@endsection
@section('top-scripts')
  <script type="text/javascript">
  </script>
@endsection
@section('content')
@section('top-title-and-breadcrubs')
    <section class="content-header">
      <h1>
        Post
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Post</a></li>
        <li class="active">Show</li>
      </ol>
    </section>
@endsection
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Show</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <h4>{{ $post->title }}</h4>
          {!! $post->body !!}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@endsection
@section('bottom-scripts')
  <script type="text/javascript">
    $(function () {
      $('#posts').DataTable()
    })
  </script>
@endsection
