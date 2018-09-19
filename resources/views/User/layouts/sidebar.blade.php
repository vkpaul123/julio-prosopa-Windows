<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('staticImages/user.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ @Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree" style="text-align: left;">
      <li class="header">MAIN NAVIGATION</li>
      <li @yield('sideBarActivator_Home')><a href="{{ route('home') }}"><i class="fa fa-home text-success"></i> <span>Home</span></a></li>
      <li @yield('sideBarActivator_Profile')><a href="{{ route('userProfile') }}"><i class="fa fa-user"></i> <span>Profile</span></a></li>
      <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        ">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form><i class="fa fa-power-off"></i> <span>Sign Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>