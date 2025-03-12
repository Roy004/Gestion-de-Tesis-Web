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
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/minimalist logo for a thesis management platform.png">
        <script src="js/mostrar_tesis.js"></script>
        <script src="js/gestionar_notas.js"></script>
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
                        <img class="nav-user-photo" src="img/demo/avatar/avatar.png" alt="Penny's Photo" />
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
            <div id="main-content">
                <!-- BEGIN page tittle -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Tesis en el sistema</h1>
                        <h4>Listado de tesis registradas en el sistema</h4>
                    </div>
                </div>
                <!-- END page tittle -->

                <!-- BEGIN breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li >
                            <i class="fa fa-home"></i>
                            <a href="index.html">Inicio</a>
                            <span class="divider"> <i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">
                            <a href="#">Mostrar tesis</a>
                        </li>
                    </ul>
                </div>
                <!-- END breadcrumb -->

                <!-- BEGIN main content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-table"></i> Listado de tesis registradas en el sistema</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <div class="btn-group">
                                        <button onclick="gestionarNotas()" class="btn btn-circle show-tooltip" title="Gestionar notas"><i class="fa fa-graduation-cap"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-circle show-tooltip" title="Imprimir seleccionados"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-circle show-tooltip" title="Exportar a PDF"><i class="fa fa-file-text-o"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-circle show-tooltip" title="Refrescar"><i class="fa fa-repeat"></i></a>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="clearfix"></div>



                                <div class="table-responsive" style="border:0">
                                    


                                    <table class="table table-advance" id="table1">
                                        <thead>
                                            <tr>
                                                <th style="width:18px"><input type="checkbox" /></th>
                                                <th style="width:50px">#</th>
                                                <th>Título</th>
                                                <th>Autor(es)</th>
                                                <th>Tutor</th>
                                                <th>Cotutor</th>
                                                <th>Tipo de trabajo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-flag-blue">
                                                <td><input type="checkbox" /></td>
                                                <td>Desarrollo de un sistema para la gestion de tesis en el ISMI</td>
                                                <td>Anyelis Cristina <br> Roinel Pérez</td>
                                                <td>Yasser</td>
                                                <td>Ernesto</td>
                                                <td>Desarrollo de software</td>
                                            </tr>

                                            <tr class="table-flag-green">
                                                <td><input type="checkbox" /></td>
                                                <td>El uso de las TIC en el proceso docente educativo</td>
                                                <td>Ernesto Guerra <br> Pablo Tamayo</td>
                                                <td>Yuliet Guerra</td>
                                                <td>Yeslenys Casisgato</td>
                                                <td>Investigativo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END main content -->
            </div>
            <!-- END content -->
                
                <footer>
                    <p>ISMI 2024</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- END Container -->
        
        

        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

        <!--flaty scripts-->
        <script src="js/flaty.js"></script>
        <script src="js/flaty-demo-codes.js"></script>

        <script src="js/adicionar_tesis.js"></script>

    </body>
</html>
