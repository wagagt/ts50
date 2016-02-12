<header class="main-header">
    <!-- Logo -->
    <a href="home" class="logo">TIERRASEGURA</a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <!--<ul class="nav navbar-nav">-->
            <!--    <li class="carousel-control"> <h4><strong>Cliente:<strong></h4>    </li>-->
            <!--</ul>-->
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('images/logo.png') }}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('images/logo.png') }}" class="img-circle" alt="User Image" />
                            <p>
                           {{ Auth::user()->name }}
                            <small>Usuario desde Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!--<div class="pull-left">-->
                            <!--    <a href="#" class="btn btn-default btn-flat">Profile</a>-->
                            <!--</div>-->
                            <div class="pull-right">
                                <a href="/auth/logout" class="btn btn-danger btn-flat">Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>