<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini" style="color: #333;">J-<b>P</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{ asset('imgs/logo_big.png') }}" alt="logo" width="175"></span>
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
              <img src="{{ asset('staticImages/user.png') }}" class="user-image" alt="User Image">
            <span class="hidden-xs" style="color: #333;">{{ @Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="{{ asset('staticImages/user.png') }}" class="img-circle" alt="User Image">

              <p style="color: #333;">
                {{ @Auth::user()->name }} - <strong>{{ @Auth::user()->usertype }}</strong>
                <small>Member since {{ @Auth::user()->created_at->diffForHumans() }}</small>
              </p>
            </li>
           
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('userProfile') }}" class="btn btn-default"><span class="text-green">Profile</span></a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class="btn btn-default"><span class="text-red">Sign out</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>