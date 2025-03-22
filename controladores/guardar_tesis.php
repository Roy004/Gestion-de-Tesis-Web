<?php
include "../modelo/modelo.php";
$mod=new Modelo();

$titulo=$_POST['titulo'];
$autores=$_POST['autores'];
$tutores=$_POST['tutores'];
$id_tipo_trabajo=$_POST['tipo-trabajo'];

$mod->guardarTesis($titulo, $id_tipo_trabajo);
