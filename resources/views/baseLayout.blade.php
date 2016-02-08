<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- Estilos !-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="global/css/image-picker.css" rel="stylesheet" type="text/css"/>
    <link href="global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <link href="layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="layouts/layout4/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="global/css/jquery.stepify.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <div class="page-logo">
            <a href="{{URL::to('dashboard')}}">
                <img src="global/img/logo-big-black.png" height="100" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> Nick </span>
                            <img alt="" class="img-circle" src="layouts/layout4/img/avatar9.jpg" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> Mis Solicitudes </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="{{URL::to('logout')}}">
                                    <i class="icon-key"></i> Salir </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start ">
                    <a href="{{URL::to('/')}}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Escritorio</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Información</h3>
                </li>
                <li class="nav-item start ">
                    <a href="{{URL::to('mis-solicitudes')}}" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">Mis Solicitudes</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{URL::to('new-request')}}" class="nav-link nav-toggle">
                        <i class="icon-plus"></i>
                        <span class="title">Nueva solicitud</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        @yield('content')
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; Pavimentos de Colombia S.A.S.</div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="global/plugins/respond.min.js"></script>
<script src="global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="apps/scripts/image-picker.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="global/scripts/underscore.js" type="text/javascript"></script>
<script src="global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="global/plugins/moment.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js" type="text/javascript"></script>
<script src="global/plugins/fullcalendar/lang/es.js" type="text/javascript"></script>
<script src="global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="global/scripts/datatable.js" type="text/javascript"></script>
<script src="global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="pages/scripts/table-datatables-managed.js" type="text/javascript"></script>
<script src="global/scripts/jquery.stepify.js" type="text/javascript"></script>
<script src="global/scripts/custom.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>