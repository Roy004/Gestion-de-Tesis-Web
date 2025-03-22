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
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="/css/flaty.css">
        <link rel="stylesheet" href="/css/flaty-responsive.css">

        
        <link rel="shortcut icon" href="/img/minimalist logo for a thesis management platform.png">
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
        <?php
        include_once "navbar.php";
        ?>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <?php
            include_once "sidebar.php";
            ?>
            <!-- END Sidebar -->
            
            <!-- BEGIN content -->
            <div class="page-title">
                <div style="margin:0 20%;">
                    <h1>Bienvenido al sistema de gestión de tesis</h1>
                </div>
                <div class="page-subtitle" style="margin: 0 25%;">
                    <div style="display:inline-block; vertical-align:middle; margin-right:10px;">
                        <i class="fa fa-exclamation-circle fa-2x"></i>
                        <h2>Debe registrarse o iniciar sesión para usar las funcionalidades del sistema</h2>
                    </div>
                </div>
            </div>
            <!-- END content -->
                
                

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- END Container -->
        
        

        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script src="/assets/flot/jquery.flot.js"></script>
        <script src="/assets/flot/jquery.flot.resize.js"></script>
        <script src="/assets/flot/jquery.flot.pie.js"></script>
        <script src="/assets/flot/jquery.flot.stack.js"></script>
        <script src="/assets/flot/jquery.flot.crosshair.js"></script>
        <script src="/assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="/assets/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

        <!--flaty scripts-->
        <script src="/js/flaty.js"></script>
        <script src="/js/flaty-demo-codes.js"></script>

    </body>
</html>
