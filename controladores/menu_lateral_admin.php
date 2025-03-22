<?php
class MenuLateralAdmin{
    public function CargarPagina($pagina){
        switch($pagina){
            case 'index':
                header("Location: /vistas/administrador/index.php");
                break;
            case 'mostrar_tesis':
                include '/vistas/administrador/mostrar_tesis.php';
                break;
            case 'mostrar_tutores':
                include '/vistas/administrador/mostrar_tutores.php';
                break;
        }
    }
}
