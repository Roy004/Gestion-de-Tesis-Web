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
        <script src="/js/mostrar_tesis.js"></script>
        <script src="/js/gestionar_notas.js"></script>
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
        <?php include "navbar.php"; ?>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- END Sidebar -->
            
            <!-- BEGIN content -->
            <div id="main-content" style="margin-left:18%">
                <!-- BEGIN page tittle -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Usuarios registrados en el sistema</h1>
                        <h4>Listado de usuarios registrados en el sistema</h4>
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
                            <a href="#">Mostrar usuarios</a>
                        </li>
                    </ul>
                </div>
                <!-- END breadcrumb -->

                <!-- BEGIN main content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-table"></i> Listado de usuarios registrados en el sistema</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    
                                    <div class="btn-group">
                                        <a href="adicionar_usuario.php" class="btn btn-circle show-tooltip" title="Adicionar usuario"><i class="fa fa-plus"></i></a>
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
                                    


                                    <table class="table table-advance" id="tabla_usuarios">
                                        <thead>
                                            <tr>
                                                <th style="width:18px"><input type="checkbox" /></th>
                                                <th style="width:50px">#</th>
                                                <th>Nombre y apellidos</th>
                                                <th>nombre de usuario</th>
                                                <th>Categoría científica</th>
                                                <th>Grado militar</th>
                                                <th style="width:120px">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once '../../modelo/modelo.php';

                                            $mod=new Modelo();
                                            $registros=$mod->obtenerUsuarios();

                                            
                                            if($registros->num_rows>0){
                                                $cont=1;
                                                foreach($registros as $res){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cont++ ?></td>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                            }
                                            ?>
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
        <script>window.jQuery || document.write('<script src="/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

        <!--flaty scripts-->
        <script src="/js/flaty.js"></script>
        <script src="/js/flaty-demo-codes.js"></script>


    </body>
</html>