@extends('layouts.admin')
@section('title')
  E-Lawyers Online - Post/Add New (Admin)
@endsection
@section('top-scripts')
  <script src="{{ asset('js/tinymce.min.js') }}"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: '#body',
      height: 300,
      menubar: true,
      // plugin_url: "{{ asset('js/tinymce/plugins') }}",
      // plugins: [
      //   'advlist autolink lists link image charmap print preview anchor textcolor',
      //   'searchreplace visualblocks code fullscreen',
      //   'insertdatetime media table contextmenu paste code help'
      // ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      theme_url: "{{ asset('js/tinymce/themes/theme.min.js') }}",
      skin_url: "{{ asset('css/tinymce/skins/lightgray') }}"
    });
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
        <li class="active">Add New</li>
      </ol>
    </section>
@endsection
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add New</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{ route('admin.posts.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label class="control-label">Body</label>
              <textarea id="body" name="body"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success" value="Publish" name="">
            </div>
          </form>
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


      });
  </script>
@endsection
