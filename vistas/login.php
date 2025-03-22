<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Iniciar sesión - Gestión de Tesis ISMI</title>
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
    <body class="login-page">

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form-login" onsubmit="return validarLogin()" action="/controladores/procesar_login.php" method="POST" >
                <h3>Iniciar sesión en su cuenta</h3>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Nombre de usuario" name="usuario" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" placeholder="Contraseña" name="clave" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="remember" /> Recordarme
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="submit" style="height: 50px; font-size:larger" name="inic_sesion" class="btn btn-primary form-control" value="Iniciar sesión">
                    </div>
                </div>
                <hr/>
                
            </form>
            <form method="POST">
                <input type="submit" name="invitado" id="invitado" value="Entrar como invitado">
            </form>

            <?php
                if(isset($_POST['invitado'])){
                    header("Location: /vistas/publica/index.php");
                    exit();
                }

            ?>
            <!-- END Login Form -->

        </div>
        <!-- END Main Content -->

        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script>src="/js/login.js"</script>
    </body>
</html>