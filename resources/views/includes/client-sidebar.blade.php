<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/logo.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li>
                <a href="/home">
                    <i class="fa fa-users"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-dashboard"></i> <span>Mis proyectos</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    @foreach ($proyectos as $proy)
                        <li><a href="/proyectos/{{ $proy->id }}"><i class="fa fa-level-up"></i> {{ $proy->nombre }}</a></li>
                    @endforeach
                </ul>
            </li>            
            <li>
                <a href="/auth/logout">
                <i class="fa fa-sign-out"></i> <span>Cerrar Sesión</span> 
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>