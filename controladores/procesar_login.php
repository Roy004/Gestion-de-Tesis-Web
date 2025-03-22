<?php
require "../modelo/modelo.php";

$mod=new Modelo();

if(isset($_POST['inic_sesion'])){
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    if($usuario!=null&&$clave!=null){
        $res=$mod->procesarLogin($usuario,$clave);
    }
    else{
        
    }

    echo '<script>window.location.href="/vistas/administrador"</script>';
    exit();

    if($res->num_rows>0){
        switch($res['rol']){
            case 'admin':
                echo "<script>window.location.href='/vistas/administrador'</script>";
                exit();
        }
    }else{
        echo "<script>alert('Usuario o contraseña incorrectos')</script>";
        echo "<script>window.location.href='/vistas/login.php'</script>";
    }
}
?>