<div id="app">
    <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg main-navbar">
            <!-- navbar nav left -->
            <form class="form-inline mr-auto" method="GET" action="/search">
                @csrf
                <!-- navbar toggler -->
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>
            <!-- navbar right -->
            <ul class="navbar-nav navbar-right">
                <!-- navbar right item -->
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset('dist/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama }}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">                
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
  </div>