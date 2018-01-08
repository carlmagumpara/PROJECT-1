<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>E</b>LO</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>E-Lawyers</b>Online</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('img/CTA.gif') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">
              {{\Auth::guard('admins')->user()->first_name}} {{\Auth::guard('admins')->user()->last_name}}
            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ asset('img/CTA.gif') }}" class="img-circle" alt="User Image">

              <p>
                {{\Auth::guard('admins')->user()->first_name}} {{\Auth::guard('admins')->user()->last_name}}
                <small>Super Admin</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a class="btn btn-default btn-flat" href="{{ url('admin/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"
                             class="nav-link">
                    Sign out
                </a>
                <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
<!--         <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li> -->
      </ul>
    </div>
  </nav>
</header>