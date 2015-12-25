<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

@include('partials.htmlheader')

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('includes.client-header')
     @include('includes.client-sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
 <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    {{$title}}
                    <small>{{$subTitle}}</small>
                    </h1>
                    <!--<ol class="breadcrumb">-->
                    <!--    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
                    <!--    <li class="active">Dashboard</li>-->
                    <!--</ol>-->
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

  
    @include('partials.footer')

</div><!-- ./wrapper -->

@include('partials.scripts')
 @yield('script')

</body>
</html>