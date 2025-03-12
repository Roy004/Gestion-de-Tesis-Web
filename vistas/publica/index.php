<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestion de tesis - ISMI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="/vistas/publica/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vistas/publica/assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="/vistas/publica/css/flaty.css">
        <link rel="stylesheet" href="/vistas/publica/css/flaty-responsive.css">

        
        <link rel="shortcut icon" href="/vistas/publica/img/minimalist logo for a thesis management platform.png">
    </head>
    <body>

        <!-- BEGIN Theme Setting -->
        <div id="theme-setting">
            <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
                    <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="fa fa-desktop"></i>
                    Gestión de tesis en el ISMI
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">
                <!-- BEGIN Button Tasks -->
                
                <!-- END Button Tasks -->

                <!-- BEGIN Button Notifications -->
                
                <!-- END Button Notifications -->

                <!-- BEGIN Button Messages -->
                
                <!-- END Button Messages -->

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="/vistas/publica/img/demo/avatar/avatar.png" alt="Penny's Photo" />
                        <span class="hhh" id="user_info">
                            Admin
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Sesión iniciada 20:45
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Ajustes de la cuenta
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Editar perfil
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                Ayuda
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="fa fa-off"></i>
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->
            </ul>
            <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Buscar ..." autocomplete="on" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    
                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                   




                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-file"></i>
                            <span>Gestionar tesis</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="mostrar_tesis.html">Gestionar informacion de las tesis</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-list"></i>
                            <span>Gestionar tutores</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="mostrar_tutores.html">Mostrar tutores registrados</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->

            </div>
            <!-- END Sidebar -->
            
            <!-- BEGIN content -->
            <div class="page-title">
                <div style="margin:0 30%;">
                    <h1>Bienvenido al sistema</h1>
                </div>
            </div>
            <!-- END content -->
                
                

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- END Container -->
        
        

        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="/vistas/publica/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="/vistas/publica/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/vistas/publica/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/vistas/publica/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script src="/vistas/publica/assets/flot/jquery.flot.js"></script>
        <script src="/vistas/publica/assets/flot/jquery.flot.resize.js"></script>
        <script src="/vistas/publica/assets/flot/jquery.flot.pie.js"></script>
        <script src="/vistas/publica/assets/flot/jquery.flot.stack.js"></script>
        <script src="/vistas/publica/assets/flot/jquery.flot.crosshair.js"></script>
        <script src="/vistas/publica/assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="/vistas/publica/assets/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="/vistas/publica/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="/vistas/publica/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

        <!--flaty scripts-->
        <script src="/vistas/publica/js/flaty.js"></script>
        <script src="/vistas/publica/js/flaty-demo-codes.js"></script>

    </body>
</html>
