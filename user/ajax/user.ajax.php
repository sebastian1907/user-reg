<?php
require_once "../core.php";
require_once "../controlador/user.controlador.php";
require_once "../modelo/user.modelo.php";

class AjaxUser{
	public function ajaxIngresoUser(){
		$respuesta = ControladorUser::ctrIngresoUser();
		echo $respuesta;
	}
	
	public function ajaxSaveUser(){
		$respuesta = ControladorUser::ctrSaveUser();
		echo json_encode($respuesta);
	}
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	switch ($_POST["accion"]) {
		case 'getUser':
			$user = new AjaxUser();
			$user -> ajaxIngresoUser();
			break;

		case 'saveUser':
			$user = new AjaxUser();
			$user -> ajaxSaveUser();
			break;

		default:
			return null;
			break;
	}
}