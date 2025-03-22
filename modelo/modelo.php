<?php

class Modelo{
    
    private $con;
    function __construct()
    {
        require 'conexion.php';
        $conexion=new Conexion();
        $this->con=$conexion->Conectar();
    }

    function procesarLogin($usuario,$clave){
        $sql="SELECT nom_usuario, contraseña, roles.rol FROM personas INNER JOIN roles ON personas.id_rol = roles.id WHERE nom_usuario=? AND contraseña = ?;";
        $stmt=$this->con->prepare($sql);
        $stmt->bind_param('ss',$usuario,$clave);
        $stmt->execute();
        $res=$stmt->get_result();
        return $res;
    }

    function obtenerNombresPersonas(){
        $sql = "SELECT id, nombre_apellidos FROM personas;";
        $stmt=$this->con->prepare($sql);
        if ($stmt->execute()) {
            return $stmt->get_result();
        }
        else{
            die('consulta fallida');
        }
    }
    
    function mostrarTodasTesis(){
        include_once 'conexion.php';
        $obj=new Conexion();
        $con=$obj->Conectar();

        $sql="SELECT * FROM tesis;";
        $res=$con->execute_query($sql);
        return $res;
    }

    function guardarTesis($titulo, $id_tipo_trab){
        $sql = "INSERT INTO tesis(titulo, id_tipo_trabajo) VALUES (?, ?);";
        $stmt=$this->con->prepare($sql);
        $stmt->bind_param('si',$titulo,$id_tipo_trab);
        if ($stmt->execute()) {
            return $stmt->get_result();
        }
        else{
            die('consulta fallida');
        }
    }
    function guardarAutorTesis($autores){

    }

    function obtenerTiposTrabajo(){
        $sql = "SELECT id, tipo_trab FROM tipos_trabajo;";
        $stmt=$this->con->prepare($sql);
        if($stmt->execute()){
            return $stmt->get_result();
        }
    }
}