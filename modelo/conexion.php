<?php


class Conexion{

    private $con;
    function Conectar(){
        return $this->con = new mysqli('localhost', 'root', '', 'gestion_tesis');

    }

    function Cerrar(){
        return $this->con->close();
    }

    function getCon(){
        return $this->con;
    }
}

?>