<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form Validation - FLATY Admin</title>
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

        <link rel="shortcut icon" href="/img/favicon.png">
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
        <?php include "navbar.php" ?>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <?php include 'sidebar.php'; ?>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i>Adicionar una tesis</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Inicio</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="mostrar_tesis.html">Gestionar tesis</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">
                            <a href="#">Adicionar tesis</a>
                        </li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-bars"></i> Ingresar datos</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form action="/controladores/guardar_tesis.php" class="form-horizontal" id="adicionar_tesis" method="post" onsubmit="validarGuardarTesis()">
                                    <?php
                                    include "../../modelo/modelo.php";
                                    $mod=new Modelo();

                                    ?>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="username">Título<span style="color: orange;">*</span></label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="titulo" id="titulo" class="form-control" data-rule-required="true" data-rule-minlength="3" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="autor">Autor(es)<span style="color: orange;">*</span></label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <select name="autores[]" id="autor" class="form-control" multiple>
                                                
                                                <?php $res = $mod->obtenerNombresPersonas();
                                                foreach ($res as $data) { ?>
                                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre_apellidos'] ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="autor-2">Segundo autor</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="username" id="autor-2" class="form-control" data-rule-required="true" data-rule-minlength="3"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="autor-3">Tercer autor</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="username" id="autor-3" class="form-control" data-rule-required="true" data-rule-minlength="3"/>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="tutor">Tutor(es)<span style="color: orange;">*</span></label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <select name="tutores[]" id="tutor" class="form-control" multiple>
                                                <?php $res = $mod->obtenerNombresPersonas();
                                                foreach ($res as $data) { ?>
                                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre_apellidos'] ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="tipo-trabajo" class="col-sm-3 col-lg-2 control-label">Tipo de trabajo<span style="color: orange;">*</span></label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <select class="form-control" name="tipo-trabajo" id="tipo-trabajo" data-rule-required="true">
                                                <option value="">Seleccione el tipo de trabajo</option>
                                                <?php $res = $mod->obtenerTiposTrabajo();
                                                foreach ($res as $data) { ?>
                                                <option value="<?php echo $data['id'] ?>"><?php echo $data['tipo_trab'] ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                            <input type="submit" class="btn btn-primary" value="guardar">
                                            <button type="button" class="btn">Cancelar</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
                
                <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/js/adicionar_tesis.js"></script>
        <script src="/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="/assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/assets/jquery-validation/dist/additional-methods.min.js"></script>

        <!--flaty scripts-->
        <script src="/js/flaty.js"></script>
        <script src="/js/flaty-demo-codes.js"></script>
        <script src="../../js/validaciones.js"></script>

    </body>
</html>
