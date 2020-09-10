<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ITA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b>Pannel</span>
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
          @if (isset(Auth::user()->name))  

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="public/image/{{Auth::user()->avatar}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->full_name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="public/image/{{Auth::user()->avatar}}" class="img-circle" alt="User Image">

                <p>
                    {{Auth::user()->full_name}}
                  <small>{{Auth::user()->email}}</small>
                </p>
              </li>
              <!-- Menu Body -->         
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href={{url('admin/thanhvien/edit/'.Auth::user()->id)}} class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href={{url('logout')}} class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

          <li>
            <a  href={{url('logout')}} ><i class="fa fa-power-off"></i></a>
          </li>
          @endif

          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>
    </nav>
  </header>