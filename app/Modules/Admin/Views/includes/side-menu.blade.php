@php
  function isCurrentPageMainNav($routeName) {
    return Route::current()->getName() == $routeName ? 'active' : '';
  }
@endphp
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/CTA.gif') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{\Auth::guard('admins')->user()->first_name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ isCurrentPageMainNav('admin.index') }}">
        <a href="{{ route('admin.index') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="{{ isCurrentPageMainNav('admin.users.index') }}">
        <a href="{{ route('admin.users.index') }}">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-briefcase" aria-hidden="true"></i> <span>Legal Cases</span>
        </a>
      </li>
      <li class="treeview {{ isCurrentPageMainNav('admin.posts.add-new') }}">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Everyday Law</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-circle-o"></i>All</a></li>
          <li><a href="{{ route('admin.posts.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-money" aria-hidden="true"></i>
          <span>Payments</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>All</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-lock" aria-hidden="true"></i> <span>Admin</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>