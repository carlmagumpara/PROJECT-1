@extends('layouts.admin')
@section('title')
  E-Lawyers Online - Post/All (Admin)
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
        <li class="active">All</li>
      </ol>
    </section>
@endsection
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="posts" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr row-id="{{ $post->id }}">
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>
                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-default">View</a>
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <button data-id="{{ $post->id }}" data-url="{{ route('admin.posts.delete', $post->id) }}" class="btn btn-sm btn-danger delete-button">Delete</button>
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
@endsection
@section('bottom-scripts')
  <script type="text/javascript">
    $(document).ready(function(){

      var table = $('#posts').DataTable();

      $(document).on('click', '.delete-button', function(e){
        var id = $(this).attr('data-id');
        $.post($(this).attr('data-url'), { _token: window.Laravel.csrfToken, _method: 'delete' }, function(data){
          table.row($('[row-id='+id+']')).remove().draw();
        });
      });

    });
  </script>
@endsection
