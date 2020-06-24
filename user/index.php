<?php
session_start();
require_once "core.php";
require_once "controlador/plantilla.controlador.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
?>
